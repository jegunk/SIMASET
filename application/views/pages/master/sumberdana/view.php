<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail Aset</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/master/sumberdana" title="Kembali">Kembali</a></h4>	
<hr>
<p class="text-14">
	<label for="kode_sumber">Kode Sumber Dana</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-5" 
		placeholder="Kode Sumber Dana" 
		data-validation-error-msg="Kode Sumber Dana harus diisi, antara 1 sd 5 karakter." 
		type="text" 
		name="kode_sumber"
		id="kode_sumber"
		value="<?PHP echo $data->kode_sumber;?>"
		<?PHP echo $disabled;?>>
</p>

<p class="text-14">
	<label for="nama_aktiva">Nama Sumber Dana</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-20" 
		placeholder="Nama Sumber Dana" 
		data-validation-error-msg="Nama Sumber Dana harus diisi, antara 1 sd 20 karakter." 
		type="text" 
		name="nama_sumber"
		id="nama_sumber"
		value="<?PHP echo $data->nama_sumber;?>"
		<?PHP echo $disabled;?>>
</p>

<a class="btn btn-primary" title="Ubah Menu" href="<?PHP echo base_url();?>index.php/master/sumberdana/edit/<?PHP echo $data->kode_sumber;?>"><span>Ubah</span></a>
<a class="btn btn-danger" title="Hapus Menu" onclick="return confirm('Anda yakin menghapus data ini?');" href="<?PHP echo base_url();?>index.php/master/sumberdana/delete/<?PHP echo $data->kode_sumber;?>">Hapus</a>
