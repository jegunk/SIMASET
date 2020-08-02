<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Edit User</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/setup/user" title="Kembali">Kembali</a></h4>	
<hr>
<!--<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/setup/user/edit" class="form-horizontal" role="form">-->
	<?php echo form_open_multipart('setup/user/edit')?>
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
		value="<?PHP echo $data->nama_user;?>"
		<?PHP echo $disabled;?>>
</p>
<p>
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control">
	
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
		value="<?PHP echo $data->username;?>"
		<?PHP echo $disabled;?>>
</p>
<p>
	<label for="id_userlevel">Userlevel</label>
	<select class="form-control" name="id_userlevel" id="id_userlevel" required <?PHP echo $disabled;?>>
		<?PHP foreach($userlevel as $ul){?><option value="<?PHP echo $ul['id_userlevel'];?>" <?PHP if($data->id_userlevel == $ul['id_userlevel']){echo "selected='selected'";}?>><?PHP echo $ul["userlevel"];?></option><?PHP }?>
	</select>
</p>

<p class="text-14">
	<label for="HapusGambar">Hapus Gambar Profil</label>
	<select name="hapus_gambar" id="hapus_gambar" required="required" class="form-control">
		<option value="1">Iya</option>
		<option value="0">Tidak</option>
	</select>
</p>

<p class="text-14">
	<label for="Gambar">Upload Gambar Profil</label>
	<input class="form-control"
	type="file" name="gambar" />
</p><br>

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

<input type="hidden" name="gambarnoedit" value="<?php echo $data->gambar;?>">
<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Simpan</button>
<?php echo form_close();?>