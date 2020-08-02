<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail Departemen</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/master/dept" title="Kembali">Kembali</a></h4>	
<hr>
<p class="text-14">
	<label for="kode_dept">Kode Departemen</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-5" 
		placeholder="Kode Departemen" 
		data-validation-error-msg="Kode departemen harus diisi, antara 1 sd 5 karakter." 
		type="text" 
		name="kode_dept"
		id="kode_dept"
		value="<?PHP echo $data->kode_dept;?>"
		<?PHP echo $disabled;?>>
</p>

<p class="text-14">
	<label for="nama_dept">Nama Departemen</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-20" 
		placeholder="nama_departemen" 
		data-validation-error-msg="Nama departemen harus diisi, antara 1 sd 20 karakter." 
		type="text" 
		name="nama_dept"
		id="nama_dept"
		value="<?PHP echo $data->nama_dept;?>"
		<?PHP echo $disabled;?>>
</p>



<a class="btn btn-primary" title="Ubah Menu" href="<?PHP echo base_url();?>index.php/master/dept/edit/<?PHP echo $data->kode_dept;?>"><span>Ubah</span></a>
<a class="btn btn-danger" title="Hapus Menu" onclick="return confirm('Anda yakin menghapus data ini?');" href="<?PHP echo base_url();?>index.php/master/dept/delete/<?PHP echo $data->kode_dept;?>">Hapus</a>
