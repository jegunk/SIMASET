<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Ubah ASET</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/transaksi/aset" title="Kembali">Kembali</a></h4>
<hr>
<!--<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/transaksi/aset/edit" class="form-horizontal" role="form">-->
<?php echo form_open_multipart('transaksi/aset/edit_aksi')?>
	<table class="table table-responsive">
		<tr>
			<td>
<p class="text-14">
	<label for="kode_aset">Kode Aset</label>
	<input class="form-control" 
		data-validation="length"  
		data-validation-length="1-20" 
		placeholder="Di input tanpa spasi" 
		data-validation-error-msg="Kode Aset harus diisi, antara 1 sd 10 karakter. tanpa spasi" 
		type="text"
		readonly="readonly"
		name="kode_aset"
		id="kode_aset"
		value="<?PHP echo $aset->kode_aset;?>"
		<?PHP echo $disabled;?>>
</p> 
			</td>
			<td>
<p class="text-14">
	<label for="Kode_Pengajuan">Kode Pengajuan</label>
	<input list="list_pengajuan"
	class="form-control" 
	type="text"
	readonly="readonly" 
	name="kode_pengajuan" 
	id="kode_pengajuan"
	placeholder="kode pengajuan"
	value="<?PHP echo $aset->kode_pengajuan;?>"
	<?PHP echo $disabled;?>>
			</p></td><td>
			
<img src="<?php echo base_url();?>assets/upload/img/aset/<?PHP echo $aset->gambar;?>" alt="Gambar Aset" style="width : 30%;
      height: auto;
      display: block;
      margin-left: auto;
      margin-right: auto;">
</td>

			</tr><tr>
				<td>
<p class="text-14">
	<label for="Nama Barang">Nama Barang</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="" 
		data-validation-length="1-20" 
		data-validation-error-msg="Nama Barang harus diisi, antara 1 sd 10 karakter." 
		type="text" 
		name="nama_barang"
		id="nama_barang"
		value="<?PHP echo $aset->nama_barang;?>"
		<?PHP echo $disabled;?>>
</p>
				</td><td>
<p class="text-14">
	<label for="Nomor PO">Kode PO (Purchase Order)</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="Nomor PO" 
		data-validation-length="1-20" 
		data-validation-error-msg="Nomor PO harus diisi, minimal 1 karakter." 
		type="text" 
		name="no_po"
		id="no_po"
		value="<?PHP echo $aset->no_po;?>"
		<?PHP echo $disabled;?>>
</p>
				</td><td>
<p class="text-14">
	<label for="Merk Barang">Merk</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="" 
		data-validation-length="1-20" 
		data-validation-error-msg="Merk Barang harus diisi, antara 1 sd 10 karakter." 
		type="text" 
		name="merk_barang"
		id="merk_barang"
		value="<?PHP echo $aset->merk_barang;?>"
		<?PHP echo $disabled;?>>
</p>
				</td></tr> <tr><td>
<p class="text-14">
	<label for="Kode anggaran">Kode Mata Anggaran</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="Kode Mata Anggaran" 
		data-validation-length="1-10" 
		data-validation-error-msg="Kode Mata Anggaran harus diisi, minimal 1 karakter." 
		type="text" 
		name="kode_anggaran"
		id="kode_anggaran"
		value="<?PHP echo $aset->kode_anggaran;?>"
		<?PHP echo $disabled;?>>
</p>
				</td><td>
<p class="text-14">
	<label for="Tipe Barang">Tipe</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="" 
		data-validation-length="1-20" 
		data-validation-error-msg="Tipe Barang harus diisi, antara 1 sd 10 karakter." 
		type="text" 
		name="tipe_barang"
		id="tipe_barang"
		value="<?PHP echo $aset->tipe_barang;?>"
		<?PHP echo $disabled;?>>
</p>
				</td><td>
<p class="text-14">
	<label for="Warna Barang">Warna</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="" 
		data-validation-length="1-10" 
		data-validation-error-msg="Warna Barang harus diisi, antara 1 sd 10 karakter." 
		type="text" 
		name="warna_barang"
		id="warna_barang"
		value="<?PHP echo $aset->warna_barang;?>"
		<?PHP echo $disabled;?>>
</p>
				</td></tr><tr><td>
<p class="text-14">
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($dept as $dp){?>
			<option value="<?PHP echo $dp['kode_dept'];?>"<?PHP if($dp['kode_dept']==$aset->kode_dept){ echo " selected='selected'";}?>> <?PHP echo $dp['nama_dept'];?></option>
		<?PHP } ?>
	</select>
</p>
				</td><td>
<p class="text-14">
	<label for="qty">Banyak</label>
	<input class="form-control" 
		data-validation="number" 
		placeholder="" 
		data-validation-length="1-7" 
		data-validation-error-msg="Banyak Barang harus diisi, antara 1 sd 7 karakter." 
		type="number" 
		name="qty"
		id="qty"
		value="<?PHP echo $aset->qty;?>"
		<?PHP echo $disabled;?> >
</p>
				</td><td>
<p class="text-14">
	<label for="Kategori Barang">Kategori Barang</label>
	<select name="kode_jenis_barang" id="kode_jenis_barang" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($JenisBarang as $jb){?>
			<option value="<?PHP echo $jb['kode_jenis_barang'];?>"<?PHP if($jb['kode_jenis_barang']==$aset->kode_jenis_barang){ echo " selected='selected'";}?>> <?PHP echo $jb['nama_jenis_barang'];?></option>
		<?PHP } ?>
	</select>
</p>
			</td></tr><tr><td>
<p class="text-14">
	<label for="Sumber Dana">Sumber Dana</label>
	<select name="kode_sumber" id="kode_sumber" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($Sumber as $sb){?>
			<option value="<?PHP echo $sb['kode_sumber'];?>"<?PHP if($sb['kode_sumber']==$aset->kode_sumber){ echo " selected='selected'";}?>> <?PHP echo $sb['nama_sumber'];?></option>
		<?PHP } ?>
	</select>
</p></td><td>

<p class="text-14">
	<label for="instansi">Instansi</label>
	<input class="form-control" 
		data-validation="length" 
		placeholder="UDD Kab. Tangerang" 
		data-validation-length="1-30" 
		data-validation-error-msg="Instansi harus diisi, antara 1 sd 7 karakter." 
		type="text" 
		name="instansi"
		id="instansi"
		value="<?PHP echo $aset->instansi;?>"
		<?PHP echo $disabled;?> >
</p></td><td>
<p class="text-14">
	<label for="Tahun">Tahun</label>
	<input class="form-control" 
		data-validation="number"
		data-validation-length="1-4"  
		placeholder="<?PHP echo date("Y");?>" 
		data-validation-error-msg="Tahun harus diisi, antara 1 sd 7 karakter." 
		type="number"  
		name="tahun"
		id="tahun"
		value="<?PHP echo $aset->tahun;?>"
		<?PHP echo $disabled;?> >
</p></td></tr><tr><td>
<p class="text-14">
	<label for="HapusGambar">Hapus Gambar</label>
	<select name="hapus_gambar" id="hapus_gambar" required="required" class="form-control">
		<option value="1">Iya</option>
		<option value="0">Tidak</option>
	</select>
</p>
</td><td>
<p class="text-14">
	<label for="Gambar">Gambar</label>
	<input class="form-control"
	type="file" name="gambar" />
</p><br>
</td><td>
<input type="hidden" name="gambarnoedit" value="<?php echo $aset->gambar;?>">
<button type="submit" class="btn btn-primary pull-right" title="Simpan" id="submit" name="submit">Ubah</button>
</td></tr>
<?php echo form_close();?>
<!--</form>-->