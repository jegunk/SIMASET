<div class="row">
        <div class='col-md-4'>
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <?php if($Medis->medis>0){$Me=$Medis->medis;} else {$Me="0";}?>
              <h3><?PHP echo $Me;?></h3>

               <p style="font-size: 20px"><strong>Total Asset Medis</strong></p>
            </div>
            <div class="icon">
              <i class="ion ion-briefcase"></i>
            </div>
            
          </div>
        </div>
<div class='col-md-4'>
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <?php if($Perbaikan->perbaikan>0){$P=$Perbaikan->perbaikan;} else {$P="0";}?>
              <h3><?PHP echo $P;?></h3>

              <p style="font-size: 20px"><strong>Pengajuan Perbaikan Asset</strong></p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
          
          </div>
        </div>

         <!-- ./col -->
        <div class='col-md-4'>
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                <?php if($Musnah->musnah>0){$M=$Musnah->musnah;} else {$M="0";}?>
              <h3><?PHP echo $M;?></h3>

              <p style="font-size: 20px"><strong>Asset Musnah</strong></p>
            </div>
            <div class="icon">
              <i class="ion ion-android-delete"></i>
            </div>
           
          </div>
        </div>



<div><?php
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
    ?></div></div>
    <br>
<hr style="border: 10px">
<div class="panel panel-default">
        <div class="panel-header">
        <h4 class="text-center"><strong>Jumlah Aset Per Bagian</strong></h4></div>
        <div class="panel-body"> 
            <canvas id="myChart" width="20" height="5"></canvas>
        </div>
    </div>
</div>

<div class="panel panel-default">
        <div class="panel-header">
        <h4 class="text-center"><strong>Jumlah Aset Per Kategori Aset</strong></h4></div>
        <div class="panel-body"> 
            <canvas id="myChart2" width="20" height="5"></canvas>
        </div>
    </div>
</div>

<div class="panel panel-default">
        <div class="panel-header">
        <h4 class="text-center"><strong>Jumlah Aset Per Kondisi Aset</strong></h4></div>
        <div class="panel-body"> 
          <canvas id="myChart3" width="20" height="5"></canvas>
        </div>
    </div>
</div>


</div>
</div>
</div>
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

