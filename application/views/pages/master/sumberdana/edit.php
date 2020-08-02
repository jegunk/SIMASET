<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Ubah data Sumber Dana</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/master/aktiva" title="Kembali">Kembali</a></h4>	
<hr> 
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/master/sumberdana/edit" class="form-horizontal" role="form">
<p class="text-14">
	<label for="kode_sumber">Kode Sumber Dana</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-5" 
		placeholder="Kode Aktiva" 
		data-validation-error-msg="Kode Aktiva harus diisi, antara 1 sd 5 karakter." 
		type="text" 
		name="kode_sumber"
		id="kode_sumber"
		readonly="readonly"
		value="<?PHP echo $data->kode_sumber;?>"
		<?PHP echo $disabled;?>>
</p>

<p class="text-14">
	<label for="nama_sumber">Nama Sumber Dana</label>
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

<button type="submit" class="btn btn-primary" title="Proses" name="submit" id="submit" href="<?PHP echo base_url();?>index.php/master/sumberdana/edit/"><span>Proses</span></button>
</form>