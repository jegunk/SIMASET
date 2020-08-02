<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Form Pengajuan Kerusakan</strong>
<hr>
	<?php echo form_open_multipart('transaksi/rusak/add_aksi')?>
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
		value=""
		<?PHP echo $disabled;?>>
		<span id="hasil_cek_kode"></span>
</p>   		
</td> <td>
<p class="text-14">
	<label for="Qty">Banyak</label>
	<input class="form-control" 
		placeholder="Qty" 
		type="text" 
		name="qty"
		id="qty"
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
	onchange="return autofill();">

	<datalist id="list_aset">
    <?php
    foreach ($aset->result() as $b)
    {
        echo "<option value='$b->kode_aset'>$b->nama_barang</option>";
    }
    ?>
</datalist>
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
		value=""
		<?PHP echo $disabled;?>></textarea>
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
		<?PHP echo $disabled;?>>
</p> 						
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="Departemen">Bagian</label>
	<select name="kode_dept" id="kode_dept" required="required" class="form-control" disabled <?PHP echo $disabled;?>>
		<?PHP foreach($Dept as $dp){?>
			<option value="<?PHP echo $dp['kode_dept'];?>"><?PHP echo $dp['nama_dept'];?></option>
		<?PHP } ?>
	</select>
</p>					
</td> </tr> <tr> <td>
<p class="text-14">
	<label for="Kategori Barang">Kategori Barang</label>
	<select name="kode_jenis_barang" id="kode_jenis_barang" required="required" class="form-control" disabled <?PHP echo $disabled;?>>
		<?PHP foreach($JenisBarang as $jb){?>
			<option value="<?PHP echo $jb['kode_jenis_barang'];?>"><?PHP echo $jb['nama_jenis_barang'];?></option>
		<?PHP } ?>
	</select>
</p>						
</td> <td>

<button type="submit" class="btn btn-primary pull-right" title="Simpan" id="submit" name="submit">Simpan</button>
<?php echo form_close();?>
</td></tr></table>
<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
    <script>
$(document).ready(function(){  
      $('#kode_rusak').change(function(){  
           var kode_rusak = $('#kode_rusak').val();  
           if(kode_rusak != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>index.php/transaksi/rusak/carikode",  
                     method:"POST",  
                     data:{kode_rusak:kode_rusak},  
                     success:function(data){  
                          $('#hasil_cek_kode').html(data);  
                     }  
                });  
           }  
      });  
 });  

    	function autofill(){
        var kode_aset =document.getElementById('kode_aset').value;
        $.ajax({
                       url:"<?php echo base_url();?>index.php/transaksi/rusak/cari",
                       data:'&kode_aset='+kode_aset,
                       success:function(data){
                           var hasil = JSON.parse(data);  
                         $.each(hasil, function(key,val){ 
                            document.getElementById('kode_aset').value=val.kode_aset;
                            document.getElementById('kode_dept').value=val.kode_dept;
                            document.getElementById('qty').value=val.qty;
                            document.getElementById('kode_jenis_barang').value=val.kode_jenis_barang;    
                     
                });
            }
                   });
                   
    }</script>