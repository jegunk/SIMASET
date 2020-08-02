<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<a class="btn btn-primary" title="Tambah Data" href="<?PHP echo base_url();?>index.php/setup/menu/add"><span>Tambah</span></a>
<hr class="divider">
<h4><strong>Sitemap</strong></h4>
<div id="treemenu">
<ul>
<?PHP 
	$menu = $this->db->select("*")->from("main_menu")->order_by("posisi","ASC")->get()->result_array();
	foreach($menu as $menus)
	{
		if($menus["id_jenis_menu"] == 0)
		{
			$submenu = $this->db->select("*")->from("main_menu")->where("id_parent_menu",$menus["id_menu"])->order_by("posisi","ASC")->get()->result_array();
			if(count($submenu) > 0)
			{
				//TOP menu dropdown
				echo "<li id='". $menus["id_menu"] ."'><a href=".base_url()."index.php/setup/menu/view/". $menus["id_menu"] ."><div>". $menus["judul_menu"] ."</div></a>";
				echo "<ul>";
				//Jika Ada Submenu
				foreach($submenu as $submenus)
				{
					if($submenus["id_jenis_menu"] == 1)
					{
						echo "<li id='". $submenus["id_menu"] ."'><a href=".base_url()."index.php/setup/menu/view/". $submenus["id_menu"] ."><div>". $submenus["judul_menu"] ."</div></a></li>";
					}
				}
				echo "</ul></li>";
			}
			else
			{
				//Jika TOP menu
				echo "<li id='". $menus["id_menu"] ."'><a href=".base_url()."index.php/setup/menu/view/". $menus["id_menu"] ."><div>". $menus["judul_menu"] ."</div></a></li>";
			}
		}
	}
?>
</ul>
</div>