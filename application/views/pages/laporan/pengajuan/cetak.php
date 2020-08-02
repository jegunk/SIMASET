<?php
			$pdf = new Pdf('L', 'mm', 'A3', true, 'UTF-8', false);
            $pdf->SetTitle('Laporan Pengajuan');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAuthor('SIMASET');
            $pdf->SetDisplayMode('real', 'default');
            $i=0;
            $pdf->SetHeaderData("LAPORAN PENGAJUAN"); 
            $pdf->SetMargins('13', '20', '25');
			$pdf->AddPage('L', 'A3');
            $pdf->SetFont('helvetica', '',8);
			// set auto page breaks 
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $html='<h3> Laporan PENGAJUAN ASET</h3>
            		<table cellspacing="0" bgcolor="#666666" cellpadding="1">
					<tr bgcolor="#ffffff">';
			$html.='<th width="2%" align="center">No</th>
					<th width="8%" align="center">No Pengajuan</th>
					<th width="8%" align="center">No PO</th>
					<th width="8%" align="center">Kode Anggaran</th>
					<th width="8%" align="center">Tgl Pengajuan</th>
					<th width="8%" align="center">Bagian</th>
					<th width="8%" align="center">Kategori Barang</th>
					<th width="8%" align="center">Nama Barang</th>
					<th width="8%" align="center">Merk Barang</th>
					<th width="8%" align="center">Tipe Barang</th>
					<th width="8%" align="center">Warna Barang</th>
					<th width="8%" align="center">Jumlah</th>
					<th width="8%" align="center">Status</th>
					</tr>';
					foreach($Data as $dr){ $i++; 
				if($dr['flag_aset'] == "Y")
				{
					$status = "Sudah menjadi aset";
				} else
				{
					$status = "Belum menjadi aset";
				}
					$html.='<tr bgcolor="#ffffff">
				<td align="center">'.$i.'</td>
				<td align="center">'.$dr['kode_pengajuan'].'</td>
				<td align="center">'.$dr['no_po'].'</td>
				<td align="center">'.$dr['kode_anggaran'].'</td>
				<td align="center">'.$dr['tgl_pengajuan'].'</td>
				<td align="center">'.$dr['nama_dept'].'</td>
				<td align="center">'.$dr['nama_jenis_barang'].'</td>
				<td align="center">'.$dr['nama_barang'].'</td>
				<td align="center">'.$dr['merk_barang'].'</td>
				<td align="center">'.$dr['tipe_barang'].'</td>
				<td align="center">'.$dr['warna_barang'].'</td>
				<td align="center">'.$dr['qty'].'</td>
				<td align="center">'.$status.'</td>
				</tr>';
			}
				$html.='</table>';
					$pdf->writeHTML($html, true, false, true, false, '');
          			$pdf->Output('Laporan Pengajuan.pdf', 'D');