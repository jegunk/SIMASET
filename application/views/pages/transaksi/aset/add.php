<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Tambah ASET</strong>
<hr>
<!--<form name="myform" id="myform" action="<?PHP echo base_url();?>index.php/transaksi/aset/add" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">-->
	<?php echo form_open_multipart('transaksi/aset/add_aksi')?>
	<table class="table table-responsive">
		<tr>
			<td colspan="2">
<p class="text-14">
	<label for="kode_aset">Kode Aset</label>
	<input class="form-control" 
		data-validation="length"  
		data-validation-length="1-20" 
		placeholder="Di input tanpa spasi" 
		data-validation-error-msg="Kode Aset harus diisi, antara 1 sd 20 karakter. tanpa spasi" 
		type="text" 
		name="kode_aset"
		id="kode_aset"
		value=""
		<?PHP echo $disabled;?>>
		<span id="hasil_cek_kode"></span>
</p> 
			</td>
			<td>
<p class="text-14">
	<label for="Kode_Pengajuan">Kode Pengajuan</label>
	<input list="list_pengajuan"
	class="form-control" 
	type="text" 
	name="kode_pengajuan" 
	id="kode_pengajuan" 
	placeholder="kode pengajuan" 
	onchange="return autofill();">

	<datalist id="list_pengajuan">
    <?php
    foreach ($pengpem->result() as $b)
    {
        echo "<option value='$b->kode_pengajuan'>$b->nama_barang</option>";
    }
    ?>
</datalist>
			</p></td></tr>   

			<tr>
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
		value=""
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
		value=""
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
		value=""
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
		value=""
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
		value=""
		<?PHP echo $disabled;?>>
</p>
				</td></tr><tr><td>
<p class="text-14">
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($Dept as $dp){?>
			<option value="<?PHP echo $dp['kode_dept'];?>"><?PHP echo $dp['nama_dept'];?></option>
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
		value=""
		<?PHP echo $disabled;?> >
</p>
				</td><td>
<p class="text-14">
	<label for="Kategori Barang">Kategori Barang</label>
	<select name="kode_jenis_barang" id="kode_jenis_barang" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($JenisBarang as $jb){?>
			<option value="<?PHP echo $jb['kode_jenis_barang'];?>"><?PHP echo $jb['nama_jenis_barang'];?></option>
		<?PHP } ?>
	</select>
</p>
			</td></tr><tr><td>
<p class="text-14">
	<label for="Sumber Dana">Sumber Dana</label>
	<select name="kode_sumber" id="kode_sumber" required="required" class="form-control" <?PHP echo $disabled;?>>
		<?PHP foreach($Sumber as $sb){?>
			<option value="<?PHP echo $sb['kode_sumber'];?>"><?PHP echo $sb['nama_sumber'];?></option>
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
		value="UDD Kab. Tangerang"
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
		value="<?PHP echo date("Y");?>"
		<?PHP echo $disabled;?> >
</p></td></tr><tr><td>

<p class="text-14">
	<label for="Gambar">Gambar</label>
	<input class="form-control"
	type="file" name="gambar" />
</p><br>
</td><td colspan="2">
<button type="submit" class="btn btn-primary pull-right" title="Simpan" id="submit" name="submit">Simpan</button>
<?php echo form_close();?></td>

<!--</form>-->
<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
    <script>
			$(document).ready(function(){  
      $('#kode_aset').change(function(){  
           var kode_aset = $('#kode_aset').val();  
           if(kode_aset != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>index.php/transaksi/aset/carikode",  
                     method:"POST",  
                     data:{kode_aset:kode_aset},  
                     success:function(data){  
                          $('#hasil_cek_kode').html(data);  
                     }  
                });  
           }  
      });  
 });  


    	function autofill(){
        var kode_pengajuan =document.getElementById('kode_pengajuan').value;
        $.ajax({
                       url:"<?php echo base_url();?>index.php/transaksi/aset/cari",
                       data:'&kode_pengajuan='+kode_pengajuan,
                       success:function(data){
                           var hasil = JSON.parse(data);  
                         $.each(hasil, function(key,val){ 
                            document.getElementById('kode_pengajuan').value=val.kode_pengajuan;
                            document.getElementById('no_po').value=val.no_po;
                            document.getElementById('nama_barang').value=val.nama_barang;
                            document.getElementById('merk_barang').value=val.merk_barang;
                            document.getElementById('kode_anggaran').value=val.kode_anggaran;
                            document.getElementById('tipe_barang').value=val.tipe_barang;
                            document.getElementById('warna_barang').value=val.warna_barang;
                            document.getElementById('kode_dept').value=val.kode_dept;
                            document.getElementById('qty').value=val.qty;
                            document.getElementById('kode_jenis_barang').value=val.kode_jenis_barang;    
                     
                });
            }
                   });
                   
    }</script>