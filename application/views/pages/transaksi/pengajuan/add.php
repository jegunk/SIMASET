<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Form Pengajuan Pembelian</strong>
<hr>
<!--<form name="myform" id="myform" action="<?PHP echo base_url();?>index.php/transaksi/aset/add" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">-->
	<?php echo form_open_multipart('transaksi/pengajuan/add_aksi')?>

<table class="table">
	<tr>
		<td>
<p class="text-14">
	<label for="kode_pengajuan">No. Pengajuan</label>
	<input class="form-control" 
		data-validation="length alphanumeric"  
		data-validation-length="1-20" 
		placeholder="Di input tanpa spasi" 
		data-validation-error-msg="No Pengajuan harus diisi, antara 1 sd 20 karakter. tanpa spasi" 
		type="text"
		name="kode_pengajuan"
		id="kode_pengajuan"
		value=""
		<?PHP echo $disabled;?>>
		<span id="hasil_cek_kode"></span>
</p> 
		</td>
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
		value=""
		<?PHP echo $disabled;?>>
</p>
		</td>
	</tr>
	<tr>
	<td>
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
		value=""
		<?PHP echo $disabled;?>>
</p>
	</td>
	<td>
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
		value=""
		<?PHP echo $disabled;?>>
</p>
	</td>
	</tr>
	<tr>
		<td>
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
		value=""
		<?PHP echo $disabled;?>>
</p>
		</td>
		<td>
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
		value=""
		<?PHP echo $disabled;?>>
</p>
		</td>
		</tr>
		<tr>
			<td>
<p class="text-14">
	<label for="tgl">Tanggal</label>
	<input class="form-control" 
		data-validation="date" 
		placeholder="Tanggal" 
		data-validation-error-msg="Tanggal harus diisi." 
		type="date" 
		name="tgl_pengajuan"
		id="tgl_pengajuan"
		<?PHP echo $disabled;?>>
</p>
			</td>
			<td>
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
		value=""
		<?PHP echo $disabled;?>>
</p>
			</td>
		</tr>
		<tr>
			<td>
<p class="text-14">
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($Dept as $dp){?>
			<option value="<?PHP echo $dp['kode_dept'];?>"><?PHP echo $dp['nama_dept'];?></option>
		<?PHP } ?>
	</select>
</p>
			</td>
			<td>
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
		value=""
		<?PHP echo $disabled;?> >
</p>
			</td>
			</tr>
			<tr>
				<td>
<p class="text-14">
	<label for="Kategori Barang">Kategori Barang</label>
	<select name="kode_jenis_barang" id="kode_jenis_barang" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($JenisBarang as $jb){?>
			<option value="<?PHP echo $jb['kode_jenis_barang'];?>"><?PHP echo $jb['nama_jenis_barang'];?></option>
		<?PHP } ?>
	</select>
</p>
				</td>
	<td>
		<button type="submit" class="btn btn-primary pull-right" title="Simpan" id="submit" name="submit">Simpan</button>
<?php echo form_close();?>
	</td>
</tr>
</table>
<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
<script>
	$(document).ready(function(){  
      $('#kode_pengajuan').change(function(){  
           var kode_pengajuan = $('#kode_pengajuan').val();  
           if(kode_pengajuan != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>index.php/transaksi/Pengajuan/carikode",  
                     method:"POST",  
                     data:{kode_pengajuan:kode_pengajuan},  
                     success:function(data){  
                          $('#hasil_cek_kode').html(data);  
                     }  
                });  
           }  
      });  
 });  
</script>
<!--</form>-->