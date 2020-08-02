<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Tambah User</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/user" title="Kembali">Kembali</a></h4>	
<hr>
<!--<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/setup/user/add" class="form-horizontal" role="form">-->
	<?php echo form_open_multipart('setup/user/add')?>
<!--<p>
	<label for="id_user">Kode User</label>
	<input class="form-control" 
		data-validation="number" 
		data-validation-length="1-2" 
		placeholder="Kode user" 
		data-validation-error-msg="Kode user harus diisi angka." 
		type="number" 
		name="id_user"
		id="id_user"
		<?PHP echo $disabled;?>>
</p>--> 
<p>
	<label for="nama_user">Nama User</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="5-35" 
		placeholder="Nama user" 
		data-validation-error-msg="Nama user harus diisi, antar 5 sd 35 karakter." 
		type="text" 
		name="nama_user"
		id="nama_user"
		<?PHP echo $disabled;?>>
</p>
<p class="text-14">
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" <?PHP echo $disabled;?>>
			<option value="09096">Umum</option>
			<option value="09097">Logistik</option>
			<option value="09156">Lab</option>
			<option value="09163">Rumah Tangga</option>
			<option value="09164">Keuangan</option>
			<option value="09165">TI</option>
			<option value="09166">Kesekretariatan</option>
			<option value="09167">Pegawaian</option>
			<option value="09168">Marketing</option>
			<option value="09169">Design Grafis</option>
	</select>
</p>
<p>
	<label for="username">Username aplikasi</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="5-15" 
		placeholder="Username aplikasi" 
		data-validation-error-msg="Username aplikasi harus diisi, antar 5 sd 15 karakter." 
		type="text" 
		name="username"
		id="username"
		<?PHP echo $disabled;?>>
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

<p>
	<label for="id_userlevel">Userlevel</label>
	<select class="form-control" name="id_userlevel" id="id_userlevel" required <?PHP echo $disabled;?>>
		<?PHP foreach($userlevel as $ul){?><option value="<?PHP echo $ul['id_userlevel'];?>"><?PHP echo $ul["userlevel"];?></option><?PHP }?>
	</select>
</p>

<p class="text-14">
	<label for="Gambar">Gambar</label>
	<input class="form-control"
	type="file" name="gambar" />
</p><br>
<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Simpan</button>
<!--</form>-->
<?php echo form_close();?>