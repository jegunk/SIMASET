<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "agung");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
 
$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label untuk nama nya, tipe string
	array('label' => 'KdBarang', 'type' => 'string'),
	//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
	array('label' => 'NamaBarang', 'type' => 'string')
);
 
//melakukan query ke database select
$sql = $conn->query("SELECT * FROM master_barang");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data pertama yaitu nama kelasnya
	$temp[] = array('v' => (string)$data['KdBarang']);
	//memasukkan data kedua yaitu jumlah siswanya
	$temp[] = array('v' => (int)$data['NamaBarang']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}
 
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);
 
?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
 
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
 
	function drawChart() {
 
		// membuat data chart dari json yang sudah ada di atas
		var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
 
		// Set options, bisa anda rubah
		var options = {'title':'Data siswa',
					   'width':500,
					   'height':400};
 
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
    </script>
</head>
<body>
    
	<!--Div yang akan menampilkan chart-->
    <div id="chart_div"></div>
	
</body>
</html>