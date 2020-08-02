<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Ubah Menu</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/menu" title="Kembali">Kembali</a></h4>	
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/setup/menu/edit" class="form-horizontal" role="form">
<p>
	<label for="jenis">Jenis Menu</label>
	<select class="form-control" name="jenis" id="jenis" required onchange="ubahjenis();" <?PHP echo $disabled;?>><?PHP foreach($jenismenu as $jenis){?><option <?PHP if($jenis['id_jenis_menu'] == $menu[0]['id_jenis_menu']){ echo "selected"; }?> value="<?PHP echo $jenis['id_jenis_menu'];?>"><?PHP echo $jenis["jenis_menu"];?></option><?PHP }?></select>
</p>
<p>
	<label for="judul">Judul Menu</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-35" 
		placeholder="Judul Menu" 
		data-validation-error-msg="Judul menu harus diisi, antara 1 sd 35 karakter." 
		type="text" 
		name="judul"
		id="judul"
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
<p id="rowparent" <?PHP if($menu[0]['id_parent_menu']==NULL){echo "style='display:none;'";}?>>
	<label for="parent">Parent Menu</label>
	<select class="form-control" name="parent" id="parent" required onchange='showposisi();' <?PHP echo $disabled;?>><?PHP foreach($parent as $parentmenu){?><option <?PHP if($parentmenu['id_menu'] == $menu[0]['id_parent_menu']){ echo "selected"; }?> value="<?PHP echo $parentmenu['id_menu'];?>"><?PHP echo $parentmenu["judul_menu"];?></option><?PHP }?><option value=""></option></select>
</p>
<p id="rowposisi" <?PHP if($menu[0]['id_parent_menu']==NULL){echo "style='display:none;'";}?>>
	<label for="posisi">Posisi Menu</label>
	<input class="form-control" 
		data-validation="number" 
		data-validation-length="1-2" 
		placeholder="Posisi Menu" 
		data-validation-error-msg="Posisi menu harus diisi." 
		type="number" 
		name="posisi"
		id="posisi"
		readonly="readonly"
		value="<?PHP echo $menu[0]['posisi'];?>"
		<?PHP echo $disabled;?>>
</p>
<p>
	<label for="status">Status Menu</label>
	<select class="form-control" name="status" id="status" required <?PHP echo $disabled;?>><?PHP foreach($status as $statusmenu){?><option <?PHP if($statusmenu['id_status_menu'] == $menu[0]['id_status_menu']){ echo "selected"; }?> value="<?PHP echo $statusmenu['id_status_menu'];?>"><?PHP echo $statusmenu["status_menu"];?></option><?PHP }?></select>
</p>
<input type="hidden" name="id_menu" id="id_menu" value="<?PHP echo $menu[0]['id_menu'];?>">
<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Simpan</button>
</form>