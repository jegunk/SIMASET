<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Laporan Aset</strong>
<hr> 
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/laporan/Aset/proses" class="form-horizontal" role="form">

<p class="text-14">
	<label for="Status">Pilih Status Aset</label>
	<select name="kode_status" id="kode_status" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($ListStatus as $dp){?>
			<option value="<?PHP echo $dp['kode_status'];?>"<?PHP if($dp['kode_status']==$kode_status){ echo " selected='selected'";}?>> <?PHP echo $dp['nama_status'];?></option>
		<?PHP } ?>
	</select>
</p>

<p class="text-14">
	<label for="Status">Pilih Tahun Aset</label>
	<select name="tahun" id="tahun" required="required" class="form-control">
		<?PHP foreach($ListTahun as $th){?>
			<option value="<?PHP echo $th['tahun'];?>"<?PHP if($th['tahun']==$tahun){ echo " selected='selected'";}?>> <?PHP echo $th['tahun'];?></option>
		<?PHP } ?>
	</select>
</p>

<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Proses</button>&nbsp;<button type="submit" class="btn btn-primary" title="Export" id="export" name="export">Export</button>
<br><br>
<table class="text-14 table-responsive table-hover table-border table-striped table-bordered">
	<thead>
		<tr class="default">
			<th class="text-center">No Aset</th>
			<th class="text-center">No Pengajuan</th>
			<th class="text-center">No PO</th>
			<th class="text-center">Kode Anggaran</th>
			<th class="text-center">Bagian</th>
			<th class="text-center">Kategori Barang</th>
			<th class="text-center">Nama Barang</th>
			<th class="text-center">Merk Barang</th>
			<th class="text-center">Tipe Barang</th>
			<th class="text-center">Warna Barang</th>
			<th class="text-center">Jumlah</th>
			<th class="text-center">Sumber Dana</th>
			<th class="text-center">Instansi</th>
			<th class="text-center">Tahun</th>
		</tr>
	</thead>
	<tbody>
		<?PHP foreach($Data as $dt){?>
			<tr>
				<td class="text-center"><?PHP echo $dt['kode_aset'];?></td>
				<td class="text-center"><?PHP echo $dt['kode_pengajuan'];?></td>
				<td class="text-center"><?PHP echo $dt['no_po'];?></td>
				<td class="text-center"><?PHP echo $dt['kode_anggaran'];?></td>
				<td class="text-center"><?PHP echo $dt['nama_dept'];?></td>
				<td class="text-center"><?PHP echo $dt['nama_jenis_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['nama_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['merk_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['tipe_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['warna_barang'];?></td>
				<td class="text-center"><?PHP echo $dt['qty'];?></td>
				<td class="text-center"><?PHP echo $dt['nama_sumber'];?></td>
				<td class="text-center"><?PHP echo $dt['instansi'];?></td>
				<td class="text-center"><?PHP echo $dt['tahun'];?></td>
				</tr>
		<?PHP } ?>
	</tbody>
</table>

</form>
