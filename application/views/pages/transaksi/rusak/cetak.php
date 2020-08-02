<html>
<head>
</head>

<body onload="window.print();">
  <body>
  	<table cellspacing="0" cellpadding="0">
  		<tr>
		<td rowspan="3"><img src="<?PHP echo base_url();?>assets/images/logo.jpg" width="60" height="50"></td>
			<td style=""><p style="font-size: 11px"><strong>PALANG MERAH INDONESIA</strong></p></td>
		</tr>
			<tr>
				<td><p style="font-size: 11px"><strong>UNIT TRANSFUSI DARAH</strong></p></td>
			</tr>
			<tr>
				<td><p style="font-size: 11px"><strong>KAB. TANGERANG</strong></p></td>
			</tr>
  	</table>
<br>

	  	<table style="table-layout: fixed;border: 1px">
  		<tr><td colspan="12"><p style="text-align: center;font-size: 20px;font-weight: 900">FORMULIR KERUSAKAN</p><p style="text-align: center;font-weight: 900"><?PHP echo $rusak->kode_rusak;?></p></td>
  		</tr>
      
  		<tr height="20"></tr>
  	<?PHP $a = substr($rusak->tgl_kerusakan,0,10); $b= date_format(date_create($a),'d F Y');?> 
  		<tr>
  			<td>Nama </td>
  			<td colspan="4" width="200px">: <?PHP echo $this->session->userdata('nama_user');?></td>
			<td width="100px"></td>
  			<td>Tanggal </td>
  			<td width="130px">: <?PHP echo $b;?></td>
  			
  			<td>Jam </td>
  			<td>: </td>
  		</tr>
  		<tr>
  			<td>Bagian</td>
  			<td colspan="4">: <?PHP echo $dept->nama_dept;?></td>
  			<td></td>
  			<td>Pengajuan </td>
  	
  			<td colspan="4">:</td>
  		</tr>
		<tr>
			<td colspan="6"></td>
  			<td>Pengambilan Barang </td>
        <td>:</td>
        
		</tr>
		<tr>
			<td>Perihal :</td>
			<td colspan="4" width="100px"> <?PHP if($rusak->nama_jenis_barang == "Medis"){
				$z = "&#9632;";
			} else { 
				$z = "&#9633;";
			}?>
				<span style="font-size: 30px"><?PHP echo $z;?></span> Medis
 				</td>

 			<td colspan="3"> <?PHP if($rusak->nama_jenis_barang == "Umum"){
				$x = "&#9632;";
			} else { 
				$x = "&#9633;";
			}?>
				<span style="font-size: 30px"><?PHP echo $x;?></span> Umum
 				</td>

 			<td colspan="3"> <?PHP if($rusak->nama_jenis_barang == "TI"){
				$y = "&#9632;";
			} else { 
				$y = "&#9633;";
			}?>
				<span style="font-size: 30px"><?PHP echo $y;?></span> TI
 				</td>
		</tr>
  	</table>

  	<table cellspacing="0" cellpadding="0" border="1 solid black" style="table-layout: fixed;">
  		<th width="40px">No</th>
  		<th width="233px">Nama Barang</th>
  		<th width="233px">Spesifikasi</th>
  		<th width="233px">Jenis Kerusakan</th>

  		<tr>
  			<td style="height: 200px; vertical-align: top; text-align: center;padding-left:0.5rem;padding-top: 0.5rem">1</p></td>
  			<td style="max-width:150px; vertical-align: top;"><p style="padding-left: 0.5rem;padding-top: 0.5rem"><?PHP echo $rusak->nama_barang?></p></td>
  			<td style="max-width:150px; vertical-align: top;"><p style="padding-left: 0.5rem;padding-top: 0.5rem"><?PHP echo $rusak->merk_barang;?><br>
        <?PHP echo $rusak->tipe_barang;?><br><?PHP echo $rusak->warna_barang;?></p></td>
  			<td style="max-width:150px; vertical-align: top;"><p style="padding-right: 0.5rem;padding-left: 0.5rem;padding-top: 0.5rem;text-align: justify;text-justify : inter-word"><?PHP echo $rusak->keterangan?></p></td>
  		</tr>
  		<tr>
  			<td height="30px"></td>
  			<td height="30px"></td>
  			<td height="30px"></td>
  			<td height="30px"></td>
  		</tr>
  	</table>
<br>
  	<table>
  		<tr>
  			<td width="50px"></td>
  			<td></td>
  			<td> Bagian Administrasi Umum &</td>
  			<td width="250px"></td>
  			<td>Bagian yang meminta</td>
  		</tr>
		<tr>
			<td></td>
			<td></td>
  			<td><p style="text-align: center;"> Personalia</p></td>
  			<td colspan="2"></td>
		</tr>
		<tr>
			<td height="30px"></td>
		</tr>	
		<tr>
			<td height="100px"></td>
			<td></td>
			
			<td><p style="text-align: center;">________________</p></td>
			<td width="250px"></td>
  			<td><p style="text-align: center;"><?PHP echo $this->session->userdata('nama_user')?></p></td>
		</tr>
		
  	</table>

</body>
</html>