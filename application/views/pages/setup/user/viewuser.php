<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail User</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/beranda" title="Kembali">Kembali</a></h4>	
<hr>
<table>
	<th colspan="2"></th>
	<tr>
	<td style="width: 400px">
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
</td>
<td rowspan="1" style="width: 200px"><p style="text-align: center;"> <label for="gambar">User Profile Aplikasi</label></p>
	</tr>
	<tr>
	<td style="width: 400px">
<p>
	<label for="Departemen">Departemen</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($dept as $dp){?>
			<option value="<?PHP echo $dp['kode_dept'];?>"<?PHP if($dp['kode_dept']==$data->kode_dept){ echo " selected='selected'";}?>><?PHP echo $dp['nama_dept'];?></option>
		<?PHP } ?>
	</select>
</p>
	</td>
<td rowspan="2" style="width: 200px"><img src="<?PHP echo base_url()?>/assets/upload/img/user/<?php echo $data->gambar;?>" style="width : auto;
      height: auto;
      display: block;
      margin-left: auto;
      margin-right: auto;"> </td>
	</tr>
	<tr>
	<td style="width: 400px">
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
	</td>
	</tr>
	<tr>
	<td style="width: 400px">
<p>
	<label for="id_userlevel">Userlevel</label>
	<select class="form-control" name="id_userlevel" id="id_userlevel" required <?PHP echo $disabled;?>>
		<?PHP foreach($userlevel as $ul){?><option value="<?PHP echo $ul['id_userlevel'];?>" <?PHP if($data->id_userlevel == $ul['id_userlevel']){echo "selected='selected'";}?>><?PHP echo $ul["userlevel"];?></option><?PHP }?>
	</select>
</p>
	</td>
	</tr>
	</table>

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

<a class="btn btn-primary" title="Ubah" href="<?PHP echo base_url();?>index.php/setup/user/edit/<?PHP echo $data->id_user;?>">Ubah</a>
<a class="btn btn-warning" title="Ubah" href="<?PHP echo base_url();?>index.php/setup/user/password/<?PHP echo $data->id_user;?>">Ubah Password</a>
