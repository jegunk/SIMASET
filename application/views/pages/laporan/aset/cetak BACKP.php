<?php
            $pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Laporan Aset');
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $pdf->SetAuthor('SIMASET');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<head> 
   <style>
    @page { size: a2 landscape; margin: 60px 20px; }
    #header { position: fixed; left: 0px; top: -80px; right: 0px; height: 80px; text-align: center;border-bottom:1px solid #333333; margin-bottom:5px;}
	
    #footer { position: fixed; left: 0px; bottom: -80px; right: 0px; height: 40px; background-color: white; font-size:12px;font-weight:bold;border-top:1px solid #333333; }
    #footer .page:after { content: counter(page); }
	h3{
		margin-bottom:2px;
	}
	#header-table tr td{
		font-size:14px;
		font-weight:bold;
		padding:2px;
	}
	#detail{
		width : 100%;
		border : 1px solid #333;
	}
	#detail thead{
		font-size : 13px;
	}
	#detail tr th{
		background-color : #FFFFFF;
		color : #000;
		border:1px solid #333;
	}
	#detail tr td{
		border:1px solid #333;
	}
	#detail tbody tr:nth-child(odd) td{
			background-color: #FFF;
	}
	.th-center{
		font-size : 13px;
		font-weight:bold;
		text-align:center;
	}.td-center{
		font-size : 12px;
		text-align:center;
	}
	.td-left{
		font-size : 12px;
		text-align:left;
	}
	.td-right{
		font-size : 12px;
		text-align:right;
	}
	.td-nodata{
		font-size : 12px;
		text-align:center;
		background-color:#FFF;
	}
	hr{
		border : 1px solid #eee;
	}
  </style>
  </head>';

            $html.='<body>
  <div id="header">
    <h4>
	<div><strong>Laporan Aset</strong></div>
	</h4>
  </div>
  <div id="footer">
    <p class="page"></p>
  </div>
  <div id="content" style="margin-top:5px;">
	Data DetailBarang
	<table cellspacing=0 cellpadding=5px>
		<tbody>
			<tr>
				<td class="td-left">STATUS ASET</td><td class="td-center">:</td><td class="td-left">';
				$nama_status->nama_status;
			$html.='</td>
			</tr>
		</tbody>
	</table>
	<br>
	 
	<table cellspacing=0 cellpadding=5px id="detail">
		<thead>
			<tr>
			<th style="font-size = 13px;">No Aset</th>
			<th class="text-center">No Pengajuan</th>
			<th class="text-center">No PO</th>
			<th class="text-center">Kode Anggaran</th>
			<th class="text-center">Bagian</th>
			<th class="text-center">Kategori Barang</th>
			<th class="text-center">Nama Barang</th>
			<th class="text-center">Merk Barang</th>
			<th class="text-center">Tipe Barang</th>
			<th class="text-center">Warna Barang</th>
			<th class="text-center">Jumlah</th>
			<th class="text-center">Sumber Dana</th>
			<th class="text-center">Instansi</th>
			<th class="text-center">Tahun</th>
			</tr>
		</thead>
		
		<tbody>';
		foreach($Data as $dt){
			$html.='<tr>
				<td class="text-center">'.$dt['kode_aset'].'</td>
				<td class="text-center">'.$dt['kode_pengajuan'].'</td>
				<td class="text-center">'.$dt['no_po'].'</td>
				<td class="text-center">'.$dt['kode_anggaran'].'</td>
				<td class="text-center">'.$dt['nama_dept'].'</td>
				<td class="text-center">'.$dt['nama_jenis_barang'].'</td>
				<td class="text-center">'.$dt['nama_barang'].'</td>
				<td class="text-center">'.$dt['merk_barang'].'</td>
				<td class="text-center">'.$dt['tipe_barang'].'</td>
				<td class="text-center">'.$dt['warna_barang'].'</td>
				<td class="text-center">'.$dt['qty'].'</td>
				<td class="text-center">'.$dt['nama_sumber'].'</td>
				<td class="text-center">'.$dt['instansi'].'</td>
				<td class="text-center">'.$dt['tahun'].'</td>
			</tr>';
		}
		$html.='</tbody>
	</table>
  </div>
</body>
</html>';
        
           $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan Aset.pdf', 'I');
?>