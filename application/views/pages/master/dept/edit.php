<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Ubah data Departemen</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/master/dept" title="Kembali">Kembali</a></h4>	
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/master/dept/edit" class="form-horizontal" role="form">
<p class="text-14">
	<label for="kode_dept">Kode departemen</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-5" 
		placeholder="Kode departemen" 
		data-validation-error-msg="Kode Departemen harus diisi, antara 1 sd 5 karakter." 
		type="text" 
		name="kode_dept"
		id="kode_dept"
		readonly="readonly"
		value="<?PHP echo $data->kode_dept;?>"
		<?PHP echo $disabled;?>>
</p>

<p class="text-14">
	<label for="nama_dept">Nama Departemen</label>
	<input class="form-control" 
		data-validation="length" 
		data-validation-length="1-30" 
		placeholder="Nama Departemen" 
		data-validation-error-msg="Nama Departemen harus diisi, antara 1 sd 30 karakter." 
		type="text"  
		name="nama_dept"
		id="nama_dept"
		value="<?PHP echo $data->nama_dept;?>"
		<?PHP echo $disabled;?>>
</p>


<button type="submit" class="btn btn-primary" title="Proses" name="submit" id="submit" href="<?PHP echo base_url();?>index.php/master/dept/edit/"><span>Proses</span></button>
</form>