<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Ubah Password</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/user" title="Kembali">Kembali</a></h4>	
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/setup/user/password" class="form-horizontal" role="form">
<p>
	<label for="nama_user">Nama User</label>
	<input class="form-control" 
		type="text" 
		id="nama_user" 
		value="<?PHP echo $data->nama_user;?>" 
		disabled="disabled">
</p>
<p>
	<label for="password_confirmation">Password aplikasi</label>
	<input class="form-control" 
		data-validation="strength" 
		data-validation-strength="2" 
		placeholder="Password aplikasi" 
		type="password" 
		name="password_confirmation"
		id="password_confirmation"
		<?PHP echo $disabled;?>>
</p>
<p>
	<label for="password">Konfirmasi Password Aplikasi</label>
	<input class="form-control" 
		data-validation="confirmation" 
		placeholder="Konfirmasi Password aplikasi" 
		type="password" 
		name="password"
		id="password"
		<?PHP echo $disabled;?>>
</p>

<input class="form-control" 
		data-validation="number" 
		data-validation-length="1-2" 
		placeholder="Kode user" 
		data-validation-error-msg="Kode user harus diisi angka." 
		type="hidden" 
		name="id_user"
		id="id_user"
		value="<?PHP echo $data->id_user;?>"
		<?PHP echo $disabled;?>>
<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Simpan</button>
</form>