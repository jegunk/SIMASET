<?PHP defined('BASEPATH') OR exit('No direct script access allowed');?>
<h4><strong>Chart Kondisi Aset Terkini di SIMASET</strong>
<hr>
<?php
        foreach($pie as $p){
            $namadept[] = $p->nama_dept;
            $Total[] = $p->Total;
        }
        foreach($kategori as $k){
            $kategoribarang[] = $k->nama_jenis_barang;
            $Total2[] = $k->Total;
        }
        foreach($status as $s){
            $statusbarang[] = $s->nama_status;
            $Total3[] = $s->Total;
        }
    ?>

<strong>Jumlah Aset Per Bagian</strong>
<canvas id="myChart" width="20" height="5"></canvas><br>
<strong>Jumlah Aset Per Kategori Aset</strong>
<canvas id="myChart2" width="20" height="5"></canvas>
<strong>Jumlah Aset Per Kondisi</strong>
<canvas id="myChart3" width="20" height="5"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($namadept);?>,
        datasets: [{
            label: 'Jumlah Aset',

            data: <?php echo json_encode($Total);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode($statusbarang);?>,
        datasets: [{
            label: 'Jumlah Aset',

            data: <?php echo json_encode($Total3);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{ display: true,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($kategoribarang);?>,
        datasets: [{
            label: 'Jumlah Aset',

            data: <?php echo json_encode($Total2);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{ display: true,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

