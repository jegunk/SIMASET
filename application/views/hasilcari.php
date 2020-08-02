
<?PHP defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMASET</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Agung Nugroho">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="<?PHP echo base_url();?>assets/img/favicon.png">
  <link rel="icon" href="<?PHP echo base_url();?>assets/images/ico.svg">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'>
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/bootstrap.min.css'>
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/vendor.css'>
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/theme-3.css' id="theme">
  <link rel='stylesheet' href='<?PHP echo base_url();?>assets/css/custom.css'>
  <script src='<?PHP echo base_url();?>assets/js/modernizr-2.8.3.min.js'></script>
</head>
<body>
<!-- 
======================================================
created     : Lalat Merah
situs       : wp.icmp.my.id
whatsapp    : 082-120-215-248
ig          : @alpuketmerah
====================================================== 
-->

  <div class="page-loader">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div> <!-- .page-loader -->

  <header id="siteHeader" class="site-header site-header-fixed-top">
    <nav id="siteNavbar" class="navbar navbar-default navbar-fixed-top site-navbar-from-light-fg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle-icon navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon ti-layout-grid3-alt"></span>
          </button>

          <a class="navbar-brand" href="<?PHP echo base_url()?>">
            <p>SIMASET</p>
          </a>
        </div> <!-- .navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?PHP echo base_url()?>">Home</a></li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div>
    </nav>
  </header> <!-- .site-header -->

  <div class="main">
    <div id="home" class="home-section home-hero align-outer bg-theme-1">
    

    <div id="feature1" class="feature1-section">
      <div class="container">
        <div class="feature-1-row row">
          <div class="feature-1-left-col col-sm-6">
                  </div>
                  <div class="media-body">
                  <table class="table table-responsive table-bordered" style="text-align: center">
                    <th><p style="color: black; text-align: center">Kode Aset</p></th>
                    <th><p style="color: black; text-align: center">Kode Anggaran</p></th>
                    <th><p style="color: black; text-align: center">Nama Barang</p></th>
                    <th><p style="color: black; text-align: center">Merk Barang</p></th>
                    <th><p style="color: black; text-align: center">Tipe Barang</p></th>
                    <th><p style="color: black; text-align: center">Warna Barang</p></th>
                    <th><p style="color: black; text-align: center">Bagian</p></th>
                    <th><p style="color: black; text-align: center">Instansi</p></th>
                    <th><p style="color: black; text-align: center">Tahun</p></th>
                    <th><p style="color: black; text-align: center">Status Aset</p></th>
                    <tr>

                      <td><p style="color: black; text-align: center"><?PHP echo $aset->kode_aset;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $aset->kode_anggaran;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $aset->nama_barang;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $aset->merk_barang;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $aset->tipe_barang;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $aset->warna_barang;?></p></td>
                       <?PHP $departemen = "";
                       foreach($dept as $Dp)
                    {
                    if($Dp['kode_dept'] == $aset->kode_dept)
                    {
                        $departemen = $Dp['nama_dept'];
                    }
                }
            ?>
             <?PHP $statusaset = "";
                       foreach($status as $as)
                    {
                    if($as['kode_status'] == $aset->kode_status)
                    {
                        $statusaset = $as['nama_status'];
                    }
                }
            ?>

                      <td><p style="color: black; text-align: center"><?PHP echo $departemen;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $aset->instansi;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $aset->tahun;?></p></td>
                      <td><p style="color: black; text-align: center"><?PHP echo $statusaset;?></p></td>
                    
                    </tr>
                  </table>                  	
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div> <!-- .feature-1-left-col -->

          <div class="feature-1-right-col col-sm-5 col-sm-offset-1">
            
          </div> <!-- .feature-1-right-col -->
        </div>
      </div>
    </div> <!-- #feature1 -->

    

    

  <footer class="site-footer">
    <div id="siteFooterBottom" class="site-footer-bottom-section">
      <div class="container">
        <div class="site-footer-bottom-border"></div>
        <div class="row">
          <div class="site-footer-bottom-left-col col-md-6">
            <div class="site-footer-brand">
              SIMASET <span>Aplikasi Sistem Informasi Aset</span>
            </div>

            <div class="site-footer-bottom-info">
              <ul>
                <li><a href="<?PHP echo base_url()?>">Home</a></li>
              </ul>
            </div>
          </div>

          <div class="site-footer-bottom-right-col col-md-6">
            <div class="site-footer-bottom-copyright">Copyright © 2020 . All Rights Reserved.</div>
          </div>
        </div>
      </div>
    </div> <!-- #siteFooterBottom -->
  </footer>


  <div id="show_modal" class="modal fade" role="dialog" style="background: #000;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="font-size: 24px; color: #17919e; text-shadow: 1px 1px #ccc;"><i class="fa fa-folder"></i> Aset Details</h3>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-striped">
          <thead class="btn-primary">
            <tr>
              <th>Kode Aset</th>
              <th>Nama Barang</th>
              <th>Tipe Barang</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><p id="kode_aset"></p></td> //here i am showing the data with the help of id
              <td><p id="nama_barang"></p></td>//here i am showing the data with the help of id
              <td><p id="tipe_barang"></p></td>//here i am showing the data with the help of id
            </tr>
          </tbody>
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>


  <script src='<?PHP echo base_url();?>assets/js/jquery-1.11.3.min.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/bootstrap.min.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/vendor.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/main.js'></script>
  <script src='<?PHP echo base_url();?>assets/js/map.js'></script>
  
  <script>

     function aset(){
        var kode_aset =document.getElementById('kode_aset').value;

          $.ajax({
              url : "<?php echo base_url();?>Signin/cariAset",
              data: '&kode_aset='+kode_aset,
              method:'GET',
              dataType:'JSON',
              success:function(response) {
                $('#kode_aset').html(response.kode_aset); //hold the response in id and show on popup
                $('#nama_barang').html(response.nama_barang);
                $('#tipe_barang').html(response.tipe_barang);
                $('#show_modal').modal({backdrop: 'static', keyboard: true, show: true});
            } 
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
          });
      }
    
</script>
</body>
</html>
<!-- 
======================================================
created     : Lalat Merah
situs       : wp.icmp.my.id
whatsapp    : 082-120-215-248
ig          : @alpuketmerah
====================================================== 
-->