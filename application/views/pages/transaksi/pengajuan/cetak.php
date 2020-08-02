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
}
</style>
</head>
<body> 
    <table>
        <tr>
        <th colspan="3" style="background-color: red;"><b style="color:white;"><center>Palang Merah Indonesia</center></b></th> 
        </tr>
        <tr>
           <td width="71" rowspan="4"> <img style="display:block;" src="<?php echo base_url();?>assets/upload/qrcode/<?PHP echo $aset->qr_code;?>" width="80" height="auto"><center><?php echo $aset->kode_aset;?></center></td>
            <td style="border-right: 0px">Nama Barang</td>
            <td style="border-left: 0px"><?php echo $aset->nama_barang;?></td>
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

          <tr>
              <td style="border-right: 0px">Jenis Barang</td>
              <td style="border-left: 0px"><?php echo $jenisbarang;?></td>
          </tr>
          <tr>
              <td style="border-right: 0px">Tgl</td>
               <td style="border-left: 0px"><?PHP echo date_format(date_create($aset->tgl),"d-M-Y");?></td>
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
              <td style="border-right: 0px">Departemen</td>
              <td width="230" style="border-left: 0px"><?php echo $departemen;?></td>
          </tr>
                
        </div>    
    </div>

</div>

</body>
</html>