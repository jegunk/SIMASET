<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Laporan Pengajuan</strong>
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/laporan/Pengajuan/proses" class="form-horizontal" role="form">

<p class="text-14">
	<label for="Tanggal1">Tanggal Awal</label>
	<input type="date" name="Tanggal1" id="Tanggal1" data-validation="date" data-validation-error-msg="Tanggal 1 harus diisi." required="required" class="form-control" style="width: 200px" value="<?PHP echo $Tanggal1;?>">
</p>

<p class="text-14">
	<label for="Tanggal2">Tanggal Akhir</label>
	<input type="date" name="Tanggal2" id="Tanggal2" data-validation="date" data-validation-error-msg="Tanggal 2 harus diisi." required="required" class="form-control" style="width: 200px" value="<?PHP echo $Tanggal2;?>">
</p>

<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Proses</button>&nbsp;<button type="submit" class="btn btn-primary" title="Export" id="export" name="export">Export</button>
<br>
<br>
<table class="text-14 table-responsive table-hover table-border table-striped table-bordered">
	<thead>
		<tr class="default">
			<th class="text-center">No Pengajuan</th>
			<th class="text-center">No PO</th>
			<th class="text-center">Kode Anggaran</th>
			<th class="text-center">Tgl Pengajuan</th>
			<th class="text-center">Bagian</th>
			<th class="text-center">Kategori Barang</th>
			<th class="text-center">Nama Barang</th>
			<th class="text-center">Merk Barang</th>
			<th class="text-center">Tipe Barang</th>
			<th class="text-center">Warna Barang</th>
			<th class="text-center">Jumlah</th>
			<th class="text-center">Status</th>
		</tr>
	</thead>
	<tbody>
		<?PHP foreach($Data as $dt){?>
			<tr>
				<td class="text-center"><?PHP echo $dt['kode_pengajuan'];?></td>
				<td class="text-center"><?PHP echo $dt['no_po'];?></td>
				<td class="text-center"><?PHP echo $dt['kode_anggaran'];?></td>
				<td class="text-center"><?PHP echo $dt['tgl_pengajuan'];?></td>
				<td class="text-center"><?PHP echo $dt['nama_dept'];?></td>
				<td class="text-center"><?PHP echo $dt['nama_jenis_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['nama_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['merk_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['tipe_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['warna_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['qty'];?></td>
				<?PHP if($dt['flag_aset'] == "Y")
				{
					$status = "Sudah menjadi aset";
				} else
				{
					$status = "Belum menjadi aset";
				}?>
				<td class="text-right"><?PHP echo $status;?></td>
			</tr>
		<?PHP } ?>
	</tbody>
</table>
</form>
