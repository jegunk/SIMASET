<!DOCTYPE html>
<html>
<head>
    <title>Print Preview for <?PHP echo $aset->kode_aset;?></title>
</head>
<body> 
    <table>
        <tr>
        <th colspan="2" style="text-align: left; vertical-align: bottom;"><b style="color:black; font-family: Arial">KODE</b></th> 
        </tr>
        <tr>
        <th colspan="2" style="text-align: left; vertical-align: bottom;"><b style="color:black; font-family: Arial">INVENTARIS BARANG</b>
          <hr style="border: 3px solid black;"></th> 
        </tr>
        <tr>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">Kode</b></td>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $aset->kode_aset;?></b></td>
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
            <td><b style="color:black;font-family: Consolas,monaco,monospace">Klasifikasi</b></td>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $jenisbarang;?></b></td>
        </tr>
        <tr>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">Merk/Spec</b></td>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $aset->merk_barang;?></b></td>
        </tr>
        <tr>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">Type</b></td>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $aset->tipe_barang;?></b></td>
        </tr>
        <?PHP 
                $lokasi = "";
                foreach($dept as $Dp)
                {
                    if($Dp['kode_dept'] == $aset->kode_dept)
                    {
                        $lokasi = $Dp['nama_dept'];
                    }
                }
            ?>
        <tr>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">Lokasi</b></td>
            <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $lokasi;?></b></td>
        </tr>
        <tr>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">No. Urut</b></td>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $aset->no_urut;?></b></td>
          </tr>
        <?PHP 
                $sumber = "";
                foreach($Sumber as $Dp)
                {
                    if($Dp['kode_sumber'] == $aset->kode_sumber)
                    {
                        $sumber = $Dp['nama_sumber'];
                    }
                }
            ?>
        <tr>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">Sumber</b></td>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $sumber;?></b></td>
          </tr>
        <tr>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">Instansi</b></td>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $aset->instansi;?></b></td>
          </tr>
        <tr>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">Tahun</b></td>
              <td><b style="color:black;font-family: Consolas,monaco,monospace">:     <?php echo $aset->tahun;?></b></td>
          </tr>
        <tr>
          <td colspan="2">
            <hr style="border: 3px solid black;">
          </td></tr>

</body>
</html>


<td> <img style="display:block;" src="<?php echo base_url();?>assets/upload/qrcode/<?PHP echo $aset->gambar_qr;?>" width="100" height="auto"><center><?php echo $aset->kode_aset;?></center></td>