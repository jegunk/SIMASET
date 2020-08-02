<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail Menu</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/menu" title="Kembali">Kembali</a></h4>	
<hr>
<p>
	<label for="jenis_menu">Jenis Menu</label>
	<select class="form-control" name="jenis_menu" id="jenis_menu" required <?PHP echo $disabled;?>><?PHP foreach($jenismenu as $jenis){?><option <?PHP if($jenis['id_jenis_menu'] == $menu[0]['id_jenis_menu']){ echo "selected"; }?> value="<?PHP echo $jenis['id_jenis_menu'];?>"><?PHP echo $jenis["jenis_menu"];?></option><?PHP }?></select>
</p>
<p>
	<label for="judul_menu">Judul Menu</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-35" 
		placeholder="Judul Menu" 
		data-validation-error-msg="Judul menu harus diisi, antara 1 sd 35 karakter." 
		type="text" 
		name="judul_menu"
		id="judul_menu"
		value="<?PHP echo $menu[0]['judul_menu'];?>"
		<?PHP echo $disabled;?>>
</p>
<p>
	<label for="url">URL Menu</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-100" 
		placeholder="Judul Menu" 
		data-validation-error-msg="URL menu harus diisi, antara 1 sd 100 karakter." 
		type="text" 
		name="url"
		id="url"
		value="<?PHP echo $menu[0]['url'];?>"
		<?PHP echo $disabled;?>>
</p>
<?PHP if($menu[0]["id_parent_menu"] != NULL){ ?>
<p>
	<label for="parent_menu">Parent Menu</label>
	<select class="form-control" name="parent_menu" id="parent_menu" required <?PHP echo $disabled;?>><?PHP foreach($parent as $parentmenu){?><option <?PHP if($parentmenu['id_menu'] == $menu[0]['id_parent_menu']){ echo "selected"; }?> value="<?PHP echo $parentmenu['id_menu'];?>"><?PHP echo $parentmenu["judul_menu"];?></option><?PHP }?></select>
</p>
<p>
	<label for="posisi_menu">Posisi Menu</label>
	<select class="form-control" name="posisi_menu" id="posisi_menu" required <?PHP echo $disabled;?>><<option value='<?PHP echo $posisi->posisi;?>'><?PHP echo $posisi->posisi;?>. <?PHP echo $posisi->judul_menu;?></option></select>
</p>
<?PHP } ?>
<p>
	<label for="status_menu">Status Menu</label>
	<select class="form-control" name="status_menu" id="status_menu" required <?PHP echo $disabled;?>><?PHP foreach($status as $statusmenu){?><option <?PHP if($statusmenu['id_status_menu'] == $menu[0]['id_status_menu']){ echo "selected"; }?> value="<?PHP echo $statusmenu['id_status_menu'];?>"><?PHP echo $statusmenu["status_menu"];?></option><?PHP }?></select>
</p>
<a class="btn btn-primary" title="Ubah Menu" href="<?PHP echo base_url();?>index.php/setup/menu/edit/<?PHP echo $menu[0]['id_menu']?>"><span>Ubah</span></a>
<?PHP if(count($submenu) > 0){?>
</br>
</br>
<p class="alert alert-danger">Menu tidak dapat dihapus karena memiliki submenu.</p>
<?PHP }else{?>
<a class="btn btn-danger" title="Hapus Menu" onclick="return confirm('Anda yakin menghapus menu ini?');" href="<?PHP echo base_url();?>index.php/setup/menu/hapus/<?PHP echo $menu[0]['id_menu']?>">Hapus</a>
<?PHP }?>