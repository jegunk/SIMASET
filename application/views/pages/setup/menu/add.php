<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Tambah Menu</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/menu" title="Kembali">Kembali</a></h4>	
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/setup/menu/add" class="form-horizontal" role="form">
<p>
	<label for="jenis">Jenis Menu</label>
	<select class="form-control" name="jenis" id="jenis" required onchange="ubahjenis();">
		<?PHP foreach($jenismenu as $jenis){?><option value="<?PHP echo $jenis['id_jenis_menu'];?>"><?PHP echo $jenis["jenis_menu"];?></option><?PHP }?>
	</select>
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
		<?PHP echo $disabled;?>>
</p>
<p>
	<label for="url">URL Menu</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-100" 
		placeholder="Judul Menu" 
		data-validation-error-msg="URL menu harus diisi, antara 1 sd 100 karakter." 
		data-validation-allowing="#_-"
		type="text" 
		name="url"
		id="url"
		<?PHP echo $disabled;?>>
</p>
<p id="rowparent" style='display:none;'>
	<label for="parent">Parent Menu</label>
	<select class="form-control" name="parent" id="parent" onchange='showposisi();' <?PHP echo $disabled;?>>
		<option value="" selected="selected"></option>
		<?PHP foreach($parent as $parentmenu){?><option  value="<?PHP echo $parentmenu['id_menu'];?>"><?PHP echo $parentmenu["judul_menu"];?></option><?PHP }?>	
	</select>
</p>
<p id="rowposisi" style='display:none;'>
	<label for="posisi">Posisi Menu</label>
	<input class="form-control" 
		data-validation="number" 
		data-validation-length="1-2" 
		placeholder="Posisi Menu" 
		data-validation-error-msg="Posisi menu harus diisi." 
		type="number" 
		readonly="readonly"
		name="posisi"
		id="posisi"
		<?PHP echo $disabled;?>>
</p>
<p>
	<label for="status">Status Menu</label>
	<select class="form-control" name="status" id="status" required <?PHP echo $disabled;?>>
		<?PHP foreach($status as $statusmenu){?><option value="<?PHP echo $statusmenu['id_status_menu'];?>"><?PHP echo $statusmenu["status_menu"];?></option><?PHP }?>
	</select>
</p>
<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Simpan</button>
</form>