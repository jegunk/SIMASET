<?php
			$pdf = new Pdf('L', 'mm', 'A3', true, 'UTF-8', false);
            $pdf->SetTitle('Laporan Aset');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAuthor('SIMASET');
            $pdf->SetDisplayMode('real', 'default');
            $i=0;
            $pdf->SetHeaderData("LAPORAN ASET");
            $pdf->SetMargins('13', '20', '25');
			$pdf->AddPage('L', 'A3');
            $pdf->SetFont('helvetica', '',8);
			// set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $html='<h3> Laporan ASET</h3>'; 
            		$html.='<br><hr><br><br> <h4>Status Aset : '.$nama_status->nama_status.'</h4>
 	          		<table cellspacing="0" bgcolor="#666666" cellpadding="1">
					<tr bgcolor="#ffffff">';
			$html.='<th width="2%" align="center">No</th>
					<th width="7%" align="center">No Aset</th>
					<th width="7%" align="center">No Pengajuan</th>
					<th width="7%" align="center">No PO</th>
					<th width="7%" align="center">Kode Anggaran</th>
					<th width="7%" align="center">Bagian</th>
					<th width="7%" align="center">Kategori Barang</th>
					<th width="10%" align="center">Nama Barang</th>
					<th width="7%" align="center">Merk Barang</th>
					<th width="7%" align="center">Tipe Barang</th>
					<th width="7%" align="center">Warna Barang</th>
					<th width="3%" align="center">Jumlah</th>
					<th width="7%" align="center">Sumber Dana</th>
					<th width="8%" align="center">Instansi</th>
					<th width="7%" align="center">Tahun</th>
					</tr>';
					foreach($Data as $dt){ $i++;
					$html.='<tr bgcolor="#ffffff">
				<td align="center">'.$i.'</td>
				<td align="center">'.$dt['kode_aset'].'</td>
				<td align="center">'.$dt['kode_pengajuan'].'</td>
				<td align="center">'.$dt['no_po'].'</td>
				<td align="center">'.$dt['kode_anggaran'].'</td>
				<td align="center">'.$dt['nama_dept'].'</td>
				<td align="center">'.$dt['nama_jenis_barang'].'</td>
				<td align="center">'.$dt['nama_barang'].'</td>
				<td align="center">'.$dt['merk_barang'].'</td>
				<td align="center">'.$dt['tipe_barang'].'</td>
				<td align="center">'.$dt['warna_barang'].'</td>
				<td align="center">'.$dt['qty'].'</td>
				<td align="center">'.$dt['nama_sumber'].'</td>
				<td align="center">'.$dt['instansi'].'</td>
				<td align="center">'.$dt['tahun'].'</td>
			</tr>';
		}
		$html.='</table>';
		$pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan Aset.pdf', 'D');










