<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Laporan Aset</strong>
<hr> 
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/laporan/Aset/proses" class="form-horizontal" role="form">

<p class="text-14">
	<label for="Status">Pilih Status Aset</label>
	<select name="kode_status" id="kode_status" required="required" class="form-control">
		<?PHP foreach($ListStatus as $Ls){?>
			<option value="<?PHP echo $Ls['kode_status'];?>"><?PHP echo $Ls['nama_status'];?></option>
		<?PHP } ?>
	</select>
</p>

<p class="text-14">
	<label for="Status">Pilih Tahun Aset</label>
	<select name="tahun" id="tahun" required="required" class="form-control">
		<?PHP foreach($ListTahun as $Th){?>
			<option value="<?PHP echo $Th['tahun'];?>"><?PHP echo $Th['tahun'];?></option>
		<?PHP } ?>
	</select>
</p>


<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Proses</button>
</form>