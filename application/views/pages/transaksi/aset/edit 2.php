<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Ubah ASET</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/transaksi/aset" title="Kembali">Kembali</a></h4>
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/transaksi/aset/edit" class="form-horizontal" role="form">
<p class="text-14">
	<label for="kode_aset">Kode Aset</label>
	<input class="form-control" 
		data-validation="length alphanumeric" 
		data-validation-length="1-20" 
		placeholder="Di input tanpa spasi" 
		data-validation-error-msg="Kode Aset harus diisi, antara 1 sd 10 karakter. tanpa spasi" 
		type="text" 
		name="kode_aset"
		id="kode_aset"
		readonly="readonly"
		value="<?PHP echo $aset->kode_aset;?>"
		<?PHP echo $disabled;?>>
</p>

<p class="text-14">
	<label for="kode_aktiva">Tipe Aktiva</label>
	<select name="kode_aktiva" id="kode_aktiva" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($Aktiva as $ak){?>
			<option value="<?PHP echo $ak['kode_aktiva'];?>" <?PHP if($ak['kode_aktiva']==$aset->kode_aktiva){ echo " selected='selected'";}?>><?PHP echo $ak['nama_aktiva'];?></option>
		<?PHP } ?>
	</select>
</p>

<p class="text-14">
	<label for="TglDokumen">Tanggal Dokumen</label>
	<input class="form-control" 
		data-validation="date" 
		placeholder="Tanggal dokumen" 
		data-validation-error-msg="Tanggal dokumen harus diisi." 
		type="date" 
		name="TglDokumen"
		id="TglDokumen"
		value="<?PHP echo $header->TglDokumen;?>"
		<?PHP echo $disabled;?>>
</p>

<p class="text-14">
	<label for="KdJenisCutting">Jenis Cutting</label>
	<select name="KdJenisCutting" id="KdJenisCutting" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($JenisCutting as $jc){?>
			<option value="<?PHP echo $jc['KdJenisCutting'];?>" <?PHP if($jc['KdJenisCutting']==$header->KdJenisCutting){ echo " selected='selected'";}?>><?PHP echo $jc['JenisCutting'];?></option>
		<?PHP } ?>
	</select>
</p>

<p class="text-14">
	<label for="Keterangan">Keterangan</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="Keterangan" 
		data-validation-length="1-20" 
		data-validation-error-msg="Keterangan harus diisi, minimal 1 karakter." 
		type="text" 
		name="Keterangan"
		id="Keterangan"
		value="<?PHP echo $header->Keterangan;?>"
		<?PHP echo $disabled;?>>
</p>

<fieldset>

<div class="table-responsive">
<table class="table table-bordered table-striped table-hover text-14">
<thead>
	<tr>
		<th class="col-md-4 text-center info" colspan="4">Barang</th>
		<th class="col-md-4 text-center warning" colspan="4">Bahan Baku</th>
		<th class="col-md-4 text-center success" colspan="4">Hasil</th>
	</tr>
	<tr>
		<th class="col-md-1 text-center info">Kode</th>
		<th class="col-md-2 text-center info">Nama</th>
		<th class="col-md-1 text-center info">Satuan</th>
		<th class="col-md-1 text-center info">Qty</th>

		<th class="col-md-1 text-center warning">Kode</th>
		<th class="col-md-2 text-center warning">Nama</th>
		<th class="col-md-1 text-center warning">Satuan</th>
		<th class="col-md-1 text-center warning">Qty</th>

		<th class="col-md-1 text-center success">Satuan</th>
		<th class="col-md-1 text-center success">Qty</th>
		<th class="col-md-1 text-center success">Pembulatan</th>
		<th class="col-md-1 text-center success"></th>
</tr>
</thead>
<tbody>
	<?PHP $no=0;?>
	<?PHP foreach($detail as $dt){?>
		<tr id='baris<?PHP echo $no;?>'>
           <td><input type='text' class='form-control' name='KdBarang[]' id='KdBarang<?PHP echo $no;?>' value='<?PHP echo $dt['KdBarang'];?>' readonly='readonly'></td>
           <td><input type='text' class='form-control' name='NamaBarang[]' id='NamaBarang<?PHP echo $no;?>' value='<?PHP echo $dt['NamaBarang'];?>' readonly='readonly'></td>
           <td>
           <input type='hidden' class='form-control' name='KdSatuanBarang[]' id='KdSatuanBarang<?PHP echo $no;?>' value='<?PHP echo $dt['KdSatuanBarang'];?>' readonly='readonly'>
           <input type='text' class='form-control' name='SatuanBarang[]' id='SatuanBarang<?PHP echo $no;?>' value='<?PHP echo $dt['SatuanBarang'];?>' readonly='readonly'>
           </td>
           <td><input type='text' class='form-control' name='QtyBarang[]' id='QtyBarang<?PHP echo $no;?>' value='<?PHP echo $dt['QtyBarang'];?>' onKeyUp=HitungSPK('<?PHP echo $no;?>'); data-validation='number' data-validation-allowing='float' data-validation-decimal-separator='.' <?PHP echo $disabled;?> placeholder='Qty' data-validation-error-msg='Qty harus diisi, hanya angka.'></td>
           <td><input type='text' class='form-control' name='KdBahanBaku[]' id='KdBahanBaku<?PHP echo $no;?>' value='<?PHP echo $dt['KdBahanBaku'];?>' readonly='readonly'></td>
           <td><input type='text' class='form-control' name='NamaBahanBaku[]' id='NamaBahanBaku<?PHP echo $no;?>' value='<?PHP echo $dt['NamaBahanBaku'];?>' readonly='readonly'></td>
           <td>
           <input type='hidden' class='form-control' name='KdSatuanBahanBaku[]' id='KdSatuanBahanBaku<?PHP echo $no;?>' value='<?PHP echo $dt['KdSatuanBahanBaku'];?>' readonly='readonly'>
           <input type='text' class='form-control' name='SatuanBahanBaku[]' id='SatuanBahanBaku<?PHP echo $no;?>' value='<?PHP echo $dt['SatuanBahanBaku'];?>' readonly='readonly'>
           </td>
           <td><input type='text' class='form-control' name='QtyBahanBaku[]' id='QtyBahanBaku<?PHP echo $no;?>' value='<?PHP echo $dt['QtyBahanBaku'];?>' readonly='readonly'></td>
           <td>
           <input type='hidden' class='form-control' name='QtyBom[]' id='QtyBom<?PHP echo $no;?>' value='<?PHP echo $dt['QtyBOM'];?>' readonly='readonly'>
           <input type='hidden' class='form-control' name='Konversi[]' id='Konversi<?PHP echo $no;?>' value='<?PHP echo $dt['Konversi'];?>' readonly='readonly'>
           <input type='hidden' class='form-control' name='KdSatuanGudang[]' id='KdSatuanGudang<?PHP echo $no;?>' value='<?PHP echo $dt['KdSatuanSpk'];?>' readonly='readonly'>
           <input type='text' class='form-control' name='SatuanBarangGudang[]' id='SatuanBarangGudang<?PHP echo $no;?>' value='<?PHP echo $dt['SatuanBarangGudang'];?>' readonly='readonly'>
           </td>
           <td><input type='text' class='form-control' name='QtyBarangGudang[]' id='QtyBarangGudang<?PHP echo $no;?>' value='<?PHP echo $dt['QtySpk'];?>' readonly='readonly'></td>
           <td><input type='text' class='form-control' name='Pembulatan[]' id='Pembulatan<?PHP echo $no;?>' value='<?PHP echo $dt['Pembulatan'];?>' readonly='readonly'></td>
           <td><button type='button' class='btn btn-danger btn-sm' onclick=hapusBaris('<?PHP echo $no;?>');>Hapus</button></td>
       </tr>
	<?PHP $no++;}?>
</tbody>
</table>
</div>
</fieldset>
<button type="button" class="btn btn-default" title="Tambah Barang" id="tambah" name="tambah" onclick="showBarang();">Tambah Barang</button>
<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Simpan</button>

<input type="hidden" id="counter" value="<?PHP echo count($detail);?>">
</form>