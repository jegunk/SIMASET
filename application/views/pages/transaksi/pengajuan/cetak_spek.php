<!DOCTYPE html>
<html>
<head>
    <title>Print Preview for <?PHP echo $aset->kode_aset;?></title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  align-items: center;
}
th, td {
  padding: 5px;
  text-align: left; 
  font-family: sans-serif   
}
b {
  font-size: 25px;
  font-family: sans-serif;
}
.th1 {
 


}

</style>
</head>
<body> 
    <table width="800">
        <tr>
          <th rowspan="2" width="101"> <img src="<?PHP echo base_url();?>assets/images/logo.jpg" width="100" height="auto" style="display: inline-block;" class="th1"></th>
          <th><b><center>Unit Donor Darah PMI Kabupaten Tangerang</center></b></th>
          <th rowspan="2" width="101"><img style="display:block;" src="<?php echo base_url();?>assets/upload/qrcode/<?PHP echo $aset->qr_code;?>" width="100" height="auto"><center><?php echo $aset->kode_aset;?></center></th>
        </tr>
        <tr>
          <td><i><center>Jl. Kp. Pos Bitung No.47A, Kadu Jaya, Kec. Curug, Tangerang, Banten 15810</center></i></td>
        </tr>
        <?PHP 
                $jenisbarang = "";
                foreach($JenisBarang as $Jb)
                {
                    if($Jb['kode_jenis_barang'] == $aset->kode_jenis_barang)
                    {
                        $jenisbarang = $Jb['nama_jenis_barang'];
                    }
                }
            ?>
        </table>
        <table width="800">
         <tr>
           <td width="200">Kode Aset</td>
           <td><?php echo $aset->kode_aset;?></td>
           <td><i>Gambar Aset</i></td>
         </tr>

            <?PHP 
                $tipeAktiva = "";
                foreach($Aktiva as $ak)
                {
                    if($ak['kode_aktiva'] == $aset->kode_aktiva)
                    {
                        $tipeAktiva = $ak['nama_aktiva'];
                    }
                }
            ?>

        <tr>
          <td>Tipe Aktiva</td>
          <td><?php echo $aset->kode_aktiva;?> - <?php echo $tipeAktiva;?></td>
          <td rowspan="7"><img src="<?php echo base_url();?>assets/upload/img/aset/<?PHP echo $aset->gambar;?>" width="100%" height="auto" style="display: inline-block;"></td>
        </tr>

        <tr>
          <td>No PO (Purchase Order) Pembelian</td>
          <td><?php echo $aset->no_po;?></td>
        </tr>

        <tr>
          <td>Tgl di gunakan</td>
          <td><?PHP echo date_format(date_create($aset->tgl),"d-M-Y");?></td>
        </tr>

         <?PHP 
                $departemen = "";
                foreach($dept as $Dp)
                {
                    if($Dp['kode_dept'] == $aset->kode_dept)
                    {
                        $departemen = $Dp['nama_dept'];
                    }
                }
            ?>

          <tr>
              <td>Departemen</td>
              <td width="250"><?php echo $departemen;?></td>
          </tr>

          <tr>
              <td>Jenis Barang</td>
              <td><?php echo $jenisbarang;?></td>
          </tr>
          <tr>
              <td>Nama Barang</td>
               <td><?PHP echo $aset->nama_barang;?></td>
          </tr>

          <tr>
            <td>Jumlah</td>
            <td><?php echo $aset->qty;?></td>
          </tr>
          <tr>
              <td rowspan="3">Spesifikasi Barang</td>
               <td colspan="2"><?PHP echo $aset->spek_barang;?></td>
          </tr>


           
                
        </div>    
    </div>

</div>

</body>
</html>