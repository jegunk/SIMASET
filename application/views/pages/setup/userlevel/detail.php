<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail User Level</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/userlevel/">Kembali</a></h4>
</br>
<form name="form-tambah" id="form-tambah" action="<?PHP echo base_url();?>index.php/setup/userlevel/edit" method="POST">
<p>
	<label for="nama">Nama Userlevel</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-35" 
		placeholder="Nama userlevel" 
		data-validation-error-msg="Nama userlevel harus diisi, antara 1 sd 35 karakter." 
		type="text" 
		name="nama"
		id="nama"
		value="<?PHP echo $header->userlevel;?>"
		<?PHP echo $disabled;?>>
</p>

<input type='hidden' name='id_userlevel' id='id_userlevel' value="<?PHP echo $header->id_userlevel;?>" required="required">

<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<tr>
<th class="text-center">#</th><th class="text-center">Menu</th><th class="text-center">Jenis Menu</th><th class="text-center">Tambah</th><th class="text-center">Lihat</th><th class="text-center">Ubah</th><th class="text-center">Hapus</th>
</tr>
<?PHP 
	$akses = "";
	$cekadd = "";
	$cekview = "";
	$cekedit = "";
	$cekdelete = "";
	$no=1;
	foreach($detail as $list)
	{
		if($list["add"]=="Y")
		{
			$cekadd = "checked";
		}
		else
		{
			$cekadd = "";
		}
		if($list["view"]=="Y")
		{
			$cekview = "checked";
		}
		else
		{
			$cekview = "";
		}
		if($list["edit"]=="Y")
		{
			$cekedit = "checked";
		}
		else
		{
			$cekedit = "";
		}
		if($list["delete"]=="Y")
		{
			$cekdelete = "checked";
		}
		else
		{
			$cekdelete = "";
		}
?>
<tr class="text-center">
<td><?PHP echo $no;?></td>
<td><?PHP echo $list["judul_menu"];?></td>
<td>
	<?PHP echo $list["jenis_menu"];?>
	<input type='hidden' name='id_menu[]' id='id_menu' value="<?PHP echo $list["id_menu"];?>">
	<input type='hidden' name='id_permission[]' id='id_permission' value="<?PHP echo $list["id_permission"];?>">
</td>
<td>
	<input type="checkbox" name="add[]" <?PHP echo $cekadd;?> value="<?PHP echo $list["id_menu"];?>">
</td>
<td>
	<input type="checkbox" name="view[]" <?PHP echo $cekview;?> value="<?PHP echo $list["id_menu"];?>">
</td>
<td>
	<input type="checkbox" name="edit[]" <?PHP echo $cekedit;?> value="<?PHP echo $list["id_menu"];?>">
</td>
<td>
	<input type="checkbox" name="delete[]" <?PHP echo $cekdelete;?> value="<?PHP echo $list["id_menu"];?>">
</td>
</tr>
<?PHP $no++;}?>
</table>
<button class="btn btn-primary" type="submit" name="submit" id="submit">Ubah</button>
<a class="btn btn-danger" href="<?PHP echo base_url();?>index.php/setup/userlevel/delete/<?PHP echo $header->id_userlevel;?>" onclick="return confirm('Hapus data ini?');">Hapus</a>
</form>
