<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail Pengajuan Kerusakan</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/transaksi/rusak" title="Kembali">Kembali</a></h4>
<hr>

<table class="table table-responsive">
		<tr>
			<td>
<p class="text-14">
	<label for="kode_rusak">No. Pengajuan</label>
	<input class="form-control" 
		data-validation="length alphanumeric"  
		data-validation-length="1-10" 
		placeholder="Nomor kerusakan aset" 
		data-validation-error-msg="Nomor Pengajuan Kerusakan harus diisi, antara 1 sd 10 karakter." 
		type="length alphanumeric" 
		name="kode_rusak"
		id="kode_rusak"
		value="<?PHP echo $rusak->kode_rusak;?>"
		<?PHP echo $disabled;?>>
</p>   		
</td> <td>
<p class="text-14">
	<label for="Qty">Banyak</label>
	<input class="form-control" 
		placeholder="Qty" 
		type="text" 
		name="qty"
		id="qty"
		value="<?PHP echo $rusak->qty;?>"
		<?PHP echo $disabled;?>>
</p> 			
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="kode_aset">No Aset</label>
	<input list="list_aset"
	class="form-control" 
	type="text" 
	name="kode_aset" 
	id="kode_aset" 
	placeholder="Kode Aset"
	value="<?PHP echo $rusak->kode_aset;?>"
		<?PHP echo $disabled;?>> 
	</p> 		
			</td> <td rowspan="3">
<p class="text-14">
	<label for="Keterangan">Deskripsi Kerusakan</label>
	<textarea class="form-control" 
		data-validation="length" 
		placeholder="Deskripsi Kerusakan" 
		data-validation-length="1-300" 
		data-validation-error-msg="Deskripsi harus diisi, minimal 1 - 300 karakter."  
		rows="10"
		name="keterangan"
		id="keterangan"
		<?PHP echo $disabled;?>><?PHP echo $rusak->keterangan;?></textarea>
</p> 				
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="tgl">Tanggal Kerusakan</label>
	<input class="form-control" 
		data-validation="date" 
		placeholder="Tanggal Kerusakan" 
		data-validation-error-msg="Tanggal Kerusakan." 
		type="date" 
		name="tgl_kerusakan"
		id="tgl_kerusakan"
		value="<?PHP echo $rusak->tgl_kerusakan;?>"
		<?PHP echo $disabled;?>>
</p> 						
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($dept as $d){?>
			<option value="<?PHP echo $d['kode_dept'];?>"<?PHP if($d['kode_dept']==$aset->kode_dept){ echo " selected='selected'";}?>> <?PHP echo $d['nama_dept'];?></option>
		<?PHP } ?>
	</select>
</p>					
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="Kategori Barang">Kategori Barang</label>
	<select name="kode_jenis_barang" id="kode_jenis_barang" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($JenisBarang as $jb){?>
			<option value="<?PHP echo $jb['kode_jenis_barang'];?>"<?PHP if($jb['kode_jenis_barang']==$aset->kode_jenis_barang){ echo " selected='selected'";}?>> <?PHP echo $jb['nama_jenis_barang'];?></option>
		<?PHP } ?>
	</select>
</p>						
</td> <td>
<p class="text-14">
	<label for="Status Aset">Status Kondisi Aset Barang</label>
	<select name="kode_status" id="kode_status" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($status as $jb){?>
			<option value="<?PHP echo $jb['kode_status'];?>"<?PHP if($jb['kode_status']==$aset->kode_status){ echo " selected='selected'";}?>> <?PHP echo $jb['nama_status'];?></option>
		<?PHP } ?>
	</select>
</p>
</td></tr></table>

<a class="btn btn-primary" title="Ubah" href="<?PHP echo base_url();?>index.php/transaksi/rusak/edit/<?PHP echo $rusak->kode_rusak;?>">Ubah</a>
<a class="btn btn-danger" title="Hapus" href="<?PHP echo base_url();?>index.php/transaksi/rusak/delete/<?PHP echo $rusak->kode_rusak;?>" onclick="return confirm('Anda yakin hapus data ini?');">Hapus</a>
<a class="btn btn-default" title="Cetak" href="<?PHP echo base_url();?>index.php/transaksi/rusak/cetak/<?PHP echo $rusak->kode_rusak;?>" onclick="return confirm('Cetak data ini?');" target="_blank">Cetak</a>