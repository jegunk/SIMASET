<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail Aset</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/master/jenisbarang" title="Kembali">Kembali</a></h4>	
<hr>
<p class="text-14">
	<label for="kode_jenis_barang">Kode Jenis Barang</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-10" 
		placeholder="Kode Jenis Barang" 
		data-validation-error-msg="Kode Jenis Barang harus diisi, antara 1 sd 10 karakter." 
		type="text" 
		name="kode_jenis_barang"
		id="kode_jenis_barang"
		value="<?PHP echo $data->kode_jenis_barang;?>"
		<?PHP echo $disabled;?>>
</p>

<p class="text-14">
	<label for="nama_jenis_barang">Nama Jenis Barang</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-30" 
		placeholder="nama_aset" 
		data-validation-error-msg="Nama Jenis Barang harus diisi, antara 1 sd 30 karakter." 
		type="text" 
		name="nama_jenis_barang"
		id="nama_jenis_barang"
		value="<?PHP echo $data->nama_jenis_barang;?>"
		<?PHP echo $disabled;?>>
</p>

<a class="btn btn-primary" title="Ubah Menu" href="<?PHP echo base_url();?>index.php/master/jenisbarang/edit/<?PHP echo $data->kode_jenis_barang;?>"><span>Ubah</span></a>
<a class="btn btn-danger" title="Hapus Menu" onclick="return confirm('Anda yakin menghapus data ini?');" href="<?PHP echo base_url();?>index.php/master/jenisbarang/delete/<?PHP echo $data->kode_jenis_barang;?>">Hapus</a>
