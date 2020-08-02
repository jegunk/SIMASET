<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Laporan Pengajuan</strong>
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/laporan/Pengajuan/proses" class="form-horizontal" role="form">

<p class="text-14">
	<label for="Tanggal1">Tanggal Awal</label>
	<input type="date" name="Tanggal1" id="Tanggal1" data-validation="date" data-validation-error-msg="Tanggal 1 harus diisi." style="width: 200px" required="required" class="form-control">
</p>

<p class="text-14">
	<label for="Tanggal2">Tanggal Akhir</label>
	<input type="date" name="Tanggal2" id="Tanggal2" data-validation="date" data-validation-error-msg="Tanggal 2 harus diisi." style="width: 200px" required="required" class="form-control">
</p>

<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Proses</button>
</form>