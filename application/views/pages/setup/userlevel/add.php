<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Tambah User Level</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/userlevel/">Kembali</a></h4>
</br>
<form name="form-tambah" id="form-tambah" action="<?PHP echo base_url();?>index.php/setup/userlevel/add" method="POST">
<p>
	<label for="id_userlevel">Kode Userlevel</label>
	<input class="form-control" 
		data-validation="number" 
		data-validation-length="1-2" 
		placeholder="Kode userlevel" 
		data-validation-error-msg="Kode userlevel harus diisi dengan angka." 
		type="number" 
		name="id_userlevel"
		id="id_userlevel"
		<?PHP echo $disabled;?>>
</p>
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
		<?PHP echo $disabled;?>>
</p>

<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<tr>
<th class="text-center">#</th><th class="text-center">Menu</th><th class="text-center">Jenis Menu</th><th class="text-center">Tambah</th><th class="text-center">Lihat</th><th class="text-center">Ubah</th><th class="text-center">Hapus</th>
</tr>
<?PHP 
	$no=1;
	foreach($menu as $list)
	{
?>
<tr class="text-center">
<td><?PHP echo $no;?></td>
<td><?PHP echo $list["judul_menu"];?></td>
<td>
	<?PHP echo $list["jenis_menu"];?>
	<input type='hidden' name='id_menu[]' id='id_menu' value="<?PHP echo $list["id_menu"];?>">
</td>
<td>
	<input type="checkbox" name="add[]" value="<?PHP echo $list["id_menu"];?>">
</td>
<td>
	<input type="checkbox" name="view[]" value="<?PHP echo $list["id_menu"];?>">
</td>
<td>
	<input type="checkbox" name="edit[]" value="<?PHP echo $list["id_menu"];?>">
</td>
<td>
	<input type="checkbox" name="delete[]" value="<?PHP echo $list["id_menu"];?>">
</td>
</tr>
<?PHP $no++;}?>
</table>
<button class="btn btn-success" type="submit" name="submit" id="submit">Simpan</button>
</form>
