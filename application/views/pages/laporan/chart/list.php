<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Laporan Stock</strong>
<hr>
<form name="myform" id="myform" method="post" action="<?PHP echo base_url();?>index.php/laporan/bom/proses" class="form-horizontal" role="form">

<p class="text-14">
	<label for="KdBarang">Barang</label>
	<select name="KdBarang" id="KdBarang" required="required" class="form-control">
		<?PHP foreach($ListBarang as $Br){?>
			<option value="<?PHP echo $Br['KdBarang'];?>" <?PHP if($Br['KdBarang'] == $KdBarang){ echo " selected='selected'";}?>><?PHP echo $Br['NamaBarang'];?></option>
		<?PHP } ?>
	</select>
</p>

<button type="submit" class="btn btn-primary" title="Simpan" id="submit" name="submit">Proses</button>
<p>
	<h4>Kode Barang : <?PHP echo $DetailBarang->KdBarang?><br>
	Nama Barang : <?PHP echo $DetailBarang->NamaBarang?><br>
	Satuan Barang : <?PHP echo $DetailBarang->SatuanBarang?><br></h4>
</p>
<br>
<table class="table table-bordered table-hover table-striped text-14">
	<tbody>
			<tr>
				<td>Bahan Baku</td><td>:</td><td class="text-center"><?PHP echo $Data->NamaBahanBaku;?></td>
			</tr>
			<tr>
				<td>Satuan Bahan Baku</td><td>:</td><td class="text-center"><?PHP echo $Data->SatuanBahanBaku;?></td>
			</tr>
			<tr>
				<td>Qty</td><td>:</td><td class="text-center"><?PHP echo $Data->Qty;?></td>
			</tr>
	</tbody>
</table>
<button type="submit" class="btn btn-primary" title="Export" id="export" name="export">Export</button>
</form>
