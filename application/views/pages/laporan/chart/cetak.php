<html>
<head>
   <style>
    @page { margin: 60px 10px; }
    #header { position: fixed; left: 0px; top: -80px; right: 0px; height: 80px; text-align: center;border-bottom:1px solid #333333; margin-bottom:5px;}
	body{font-family: 'Helvetica';}
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
<body>
  <div id="header">
    <h4>
	<div><strong>Laporan BOM</strong></div>
	</h4>
  </div>
  <!--<div id="footer">
    <p class="page"><span class="text-right">Halaman </span></p>
  </div>-->
  <div id="content" style="margin-top:5px;">
	<!-- Data DetailBarang-->
	<table cellspacing=0 cellpadding=5px>
		<tbody>
			<tr>
				<td class="td-left">Kode Barang</td><td class="td-center">:</td><td class="td-left"><?PHP echo $DetailBarang->KdBarang;?></td>
			</tr>
			<tr>	
				<td class="td-left">Nama Barang</td><td class="td-center">:</td><td class="td-left"><?PHP echo $DetailBarang->NamaBarang;?></td>
			</tr>
			<tr>	
				<td class="td-left">Satuan Barang</td><td class="td-center">:</td><td class="td-left"><?PHP echo $DetailBarang->SatuanBarang;?></td>
			</tr>
		</tbody>
	</table>
	</br>
	<!-- BahanBaku Detail-->
	<table cellspacing=0 cellpadding=5px id="detail">
		<tbody>
		<tr>
				<td>Bahan Baku</td><td>:</td><td class="td-center"><?PHP echo $Data->NamaBahanBaku;?></td>
			</tr>
			<tr>
				<td>Satuan Bahan Baku</td><td>:</td><td class="td-center"><?PHP echo $Data->SatuanBahanBaku;?></td>
			</tr>
			<tr>
				<td>Qty</td><td>:</td><td class="td-center"><?PHP echo $Data->Qty;?></td>
			</tr>
		</tbody>
	</table>
  </div>
</body>
</html>