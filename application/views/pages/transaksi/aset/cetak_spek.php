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
          <th rowspan="2" width="101"><img style="display:block;" src="<?php echo base_url();?>assets/upload/qrcode/<?PHP echo $aset->gambar_qr;?>" width="100" height="auto"><p style="font-size: 12px; text-align: center"><?php echo $aset->kode_aset;?></p></th>
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
           <th width="150">Kode Aset</th>
           <td><?php echo $aset->kode_aset;?></td>
            <td rowspan="7" colspan="2"><img src="<?php echo base_url();?>assets/upload/img/aset/<?PHP echo $aset->gambar;?>" width="auto" height="auto" style="display: block;margin-left: auto;margin-right: auto"></td>
         </tr>
        

        <tr>
          <th>No Pengajuan</th>
          <td><?PHP echo $aset->kode_pengajuan;?></td>
          
         
        </tr>

        <tr>
         <th>No PO Pembelian</th>
          <td><?php echo $aset->no_po;?></td>
        </tr>  

        <tr>
         <th>Kode Anggaran</th>
          <td><?php echo $aset->kode_anggaran;?></td>
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
              <th>Bagian</th>
              <td width="250"><?php echo $departemen;?></td>
          </tr>

        <tr>
              <th>Klasifikasi</th>
              <td><?php echo $jenisbarang;?></td>
          </tr>

         <tr>
              <th>No Urut</th>
            <td><?php echo $aset->no_urut;?></td>
          </tr>

          <tr>
               <th>Nama Barang</th>
               <td><?PHP echo $aset->nama_barang;?></td>
               <th width="150px">Banyak</th>
            <td><?php echo $aset->qty;?></td>
             <?PHP 
                $sumber = "";
                foreach($Sumber as $sb)
                {
                    if($sb['kode_sumber'] == $aset->kode_sumber)
                    {
                        $sumber = $sb['nama_sumber'];
                    }
                }
            ?>
          <tr>
              <th>Merk Barang</th>
               <td><?PHP echo $aset->merk_barang;?></td>
                <th>Sumber</th>
                  <td width="250"><?php echo $sumber;?>
          </tr>

          <tr>
              <th>Tipe Barang</th>
               <td><?PHP echo $aset->tipe_barang;?></td>
               <th>Instansi</th>
                <td><?php echo $aset->instansi;?></td>
          </tr>
          
          <tr>
            <th>Warna Barang</th>
            <td><?PHP echo $aset->warna_barang;?></td>
             <th>Tahun</th>
          <td><?PHP echo date_format(date_create($aset->tahun),"Y");?></td>
          </tr>
         
        </div>    
    </div>

</div>

</body>
</html>