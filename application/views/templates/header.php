<?PHP defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<?PHP
if(!$this->session->userdata("id_user") && !$this->session->userdata("username") && !$this->session->userdata("id_userlevel"))
{
	redirect("signin");
}
?>
<html lang="en">
	<head>
		<link rel="icon" href="<?PHP echo base_url();?>assets/images/ico.svg">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Agung">
		<meta name="author" content="Agung">

		<title>PMI | SIA</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Abel" type="text/css"/>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" type="text/css"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"><link href="<?PHP echo base_url();?>assets/bootstrap/css/custom.css" rel="stylesheet">

		<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
		<link href="<?PHP echo base_url();?>assets/css/styles.css" rel="stylesheet">

		<!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/ionicons-2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">

		
	</head>


<body class="hold-transition skin-blue sidebar-mini layout-fixed">
		<div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>P</b>MI</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>SIMASET</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
               </nav>
           </header> 
<!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="text-center">
						<?PHP 
                       	$gambarprofil = $this->session->userdata("username");
                       	$gambar_profil = $this->db->query("SELECT gambar FROM main_user_application WHERE username='$gambarprofil'");
                       	$row1 = $gambar_profil->row();?>
                            <img src="<?php echo base_url();?>assets/upload/img/user/<?PHP echo $row1->gambar;?>" class="img-circle" style="width: 100px; height: 100px;object-fit: cover;" alt="User Image">
                        </div><br>
                        <div class="text-center">
                       	<?PHP 
                       	$kode_dept = $this->session->userdata("kode_dept");
   						$namadept = $this->db->query("SELECT nama_dept FROM master_dept WHERE kode_dept='$kode_dept'");
   						$row = $namadept->row(); ?>
                            <p style="font-size: 20px;color: white;text-align: center;"><?PHP echo $this->session->userdata("nama_user");?></p>
                           <p style="font-size: 15px;color: white;text-align: center;"><?PHP echo $row->nama_dept;?></p>
                           <p style="font-size: 15px;color: white;text-align: center;"><?PHP ;?></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">			
						<input type="hidden" name="tahunaktif" id="tahunaktif" value="<?PHP echo $this->session->userdata("tahunaktif"); ?>">
					<input type="hidden" name="bulanaktif" id="bulanaktif" value="<?PHP echo $this->session->userdata("bulanaktif"); ?>">
						<?PHP 
							$userlevel = $this->session->userdata("id_userlevel");
							$menu = $this->db->query("SELECT a.* FROM main_menu a,main_user_permission b WHERE a.id_menu = b.id_menu AND ((b.add = 'Y') OR (b.view = 'Y') OR (b.edit = 'Y') OR (b.delete = 'Y')) AND a.id_status_menu = 'Y' AND b.id_userlevel='$userlevel' ORDER BY a.posisi,a.id_menu ASC")->result_array();
							foreach($menu as $menus)
							{
								if($menus["id_jenis_menu"] == 0)
								{
									$submenu = $this->db->query("SELECT a.* FROM main_menu a,main_user_permission b WHERE a.id_parent_menu = '". $menus["id_menu"] ."' AND a.id_status_menu = 'Y' AND a.id_menu = b.id_menu  AND b.id_userlevel = '". $userlevel ."' AND ((b.add = 'Y') OR (b.view = 'Y') OR (b.edit = 'Y') OR (b.delete = 'Y')) ORDER BY a.posisi,a.id_menu ASC")->result_array();
						
									if(count($submenu) > 0)
									{
										//TOP menu dropdown
										echo "<li><a href=".base_url()."index.php/". $menus["url"] ." <span class='pull-right-container'>
              									<i class='fa fa-angle-left pull-right'></i>".
              							"<i class='fa fa-book'></i>".$menus["judul_menu"] ." <b></b></a>";
										echo "<ul class='treeview-menu'>";
										//Jika Ada Submenu
										foreach($submenu as $submenus)
										{
											if($submenus["id_jenis_menu"] == 1)
											{
												echo "<li><a href=".base_url()."index.php/". $submenus["url"] .">"."<i class='fa fa-circle'></i>". $submenus["judul_menu"] ."</a></li>";
											}
										}
										echo "</ul></li>";
									}
									else
									{
										//Jika TOP menu
										echo "<li><a href=".base_url()."index.php/". $menus["url"] ."> <i class='fa fa-book'></i>
              " . $menus["judul_menu"] ."</a></li>";
									}
								}
							}
						?>
						<li><a href="<?PHP echo base_url();?>index.php/logout/keluar"><i class="glyphicon glyphicon-off"></i>&nbsp;&nbsp;Keluar Aplikasi</a></li>
						<input type="hidden" name="baseurl" id="baseurl" value="<?PHP echo base_url();?>">
					</ul>
							





</ul></section></aside></div>






	<!--------------------------------------------------------------------->

		<!--<div class="col-md-12 content-box-large">-->
			<div class="content-wrapper">
				<section class="content-header">
			<?PHP echo ($this->template->breadcrumbs());?>
			  	<div class="row"></div>
			  		
				<br>
				<br>
				<?PHP if($this->session->flashdata("msg")){?>
					<div id="alert_area" class="alert alert-<?PHP echo $this->session->flashdata("tipe");?> fade in"><span id="alert_text"><?PHP echo $this->session->flashdata("msg");?></span></div>
					<?PHP }?>
				</section>
<section class='content'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='box'>
              	<div class="box-header">
              		<div class='box-body'>

			  

			    
