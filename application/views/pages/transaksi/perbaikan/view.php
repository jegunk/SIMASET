<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Detail Perbaikan</strong><a class="btn btn-default pull-right btn-sm" href="<?PHP echo base_url();?>index.php/transaksi/perbaikan" title="Kembali">Kembali</a></h4>
<hr>
<table class="table table-responsive">
		<tr>
			<td>
<p class="text-14">
	<label for="kode_perbiakan">No.Pengajuan</label>
	<input class="form-control" 
		data-validation="length alphanumeric"  
		data-validation-length="1-10" 
		placeholder="Nomor Pengajuan perbaikan aset" 
		data-validation-error-msg="Nomor Pengajuan Perbaikan harus diisi, antara 1 sd 10 karakter." 
		type="length alphanumeric" 
		name="kode_perbaikan"
		id="kode_perbaikan"
		value="<?PHP echo $perbaikan->kode_perbaikan;?>"
		<?PHP echo $disabled;?>>
</p>   		
</td> <td>
<p class="text-14">
	<label for="Qty">Banyak</label>
	<input class="form-control" 
		placeholder="Qty" 
		type="text"
		readonly="readonly" 
		name="qty"
		id="qty"
		value="<?PHP echo $perbaikan->qty;?>"
		<?PHP echo $disabled;?>>
</p> 			
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="kode_rusak">No.Pengajuan Kerusakan</label>
	<input list="list_aset"
	class="form-control" 
	type="text" 
	name="kode_rusak" 
	id="kode_rusak"
	value="<?PHP echo $perbaikan->kode_rusak;?>" 
	placeholder="Kode Pengajuan Kerusakan"
	<?PHP echo $disabled;?>>
			</p> 		
			</td> <td rowspan="3">
<p class="text-14">
	<label for="Keterangan">Deskripsi Perbaikan</label>
	<textarea class="form-control" 
		data-validation="length" 
		placeholder="Deskripsi Perbaikan" 
		data-validation-length="1-200" 
		data-validation-error-msg="Deskripsi harus diisi, minimal 1 - 300 karakter."  
		rows="10"
		name="keterangan"
		id="keterangan"
		<?PHP echo $disabled;?>><?PHP echo $perbaikan->keterangan;?></textarea>
</p> 				
</td> </tr><tr> <td>
<p class="text-14">
	<label for="Kode Anggaran">Kode Mata Anggaran</label>
	<input class="form-control" 
		placeholder="Nomor kerusakan aset" 
		type="number" 
		name="kode_anggaran"
		readonly="readonly"
		id="kode_anggaran"
		value="<?PHP echo $perbaikan->kode_anggaran;?>"
		<?PHP echo $disabled;?>>
</p> 						
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="tgl">Tanggal</label>
	<input class="form-control" 
		data-validation="date" 
		placeholder="Tanggal Perbaikan" 
		data-validation-error-msg="Tanggal Perbaikan." 
		type="date" 
		name="tgl_perbaikan"
		id="tgl_perbaikan"
		value="<?PHP echo $perbaikan->tgl_perbaikan;?>"
		<?PHP echo $disabled;?>>
</p> 						
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($Dept as $d){?>
			<option value="<?PHP echo $d['kode_dept'];?>"<?PHP if($d['kode_dept']==$perbaikan->kode_dept){ echo " selected='selected'";}?>> <?PHP echo $d['nama_dept'];?></option>
		<?PHP } ?>
	</select>
</p>					
</td>  <td>
<p class="text-14">
	<label for="Kategori Barang">Kategori Barang</label>
	<select name="kode_jenis_barang" id="kode_jenis_barang" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($JenisBarang as $jb){?>
			<option value="<?PHP echo $jb['kode_jenis_barang'];?>"<?PHP if($jb['kode_jenis_barang']==$perbaikan->kode_jenis_barang){ echo " selected='selected'";}?>> <?PHP echo $jb['nama_jenis_barang'];?></option>
		<?PHP } ?>
	</select>
</p>						
</td> </tr><tr><td>
<a class="btn btn-primary" title="Ubah" href="<?PHP echo base_url();?>index.php/transaksi/perbaikan/edit/<?PHP echo $perbaikan->kode_perbaikan;?>">Ubah</a>
<a class="btn btn-danger" title="Hapus" href="<?PHP echo base_url();?>index.php/transaksi/perbaikan/delete/<?PHP echo $perbaikan->kode_perbaikan;?>" onclick="return confirm('Anda yakin hapus data ini?');">Hapus</a>
<a class="btn btn-default" title="Cetak" href="<?PHP echo base_url();?>index.php/transaksi/perbaikan/cetak/<?PHP echo $perbaikan->kode_perbaikan;?>" onclick="return confirm('Cetak data ini?');" target="_blank">Cetak</a></td></tr>