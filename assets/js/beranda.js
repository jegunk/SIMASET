 $(document).ready(function() {
      UbahPie();
      UbahColumn();
  });

function UbahPie()
{
  var Tahun = $("#pilihanPie").val(); 

  var options = {
      title: {
          text: 'Total Jenis Cutting'
      },
      chart: {
          renderTo: 'piechart',
          type: 'pie'
      },
      series: [{}] 
  };

  $.ajax({
          type: 'POST',
          url: base_url+'index.php/beranda/DataPie/',
          dataType: 'json',
          data: {Tahun:Tahun},
          cache: false,
          success: function(response)
          {
            var status = response["status"];
            if(status == true)
            {
                var data = response["data"];
                if (data.length > 0) 
                {
                    var Data = [];
        
                    for( var i = 0, len = data.length; i < len; i++ ) 
                    {
                        var item = data[i];
                        Data.push({name:item["JenisCutting"], y:item["Total"]});
                    }

                    options.series[0].name = "Total";
                    options.series[0].data = Data;

                    var chart = new Highcharts.Chart(options);
                }
                else
                {
                    alert("Data untuk pilihan " + Tahun + " Tidak Ditemukan!");
                }
            }
            else
            {
                var message = response["message"];
                alert(message);
            }
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) 
          {
              alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
          }
  });
}

function UbahColumn()
{
  var Tahun = $("#pilihanColumn").val();
  var KdBarang = $("#KdBarang").val();

  var options = {
      title: {
          text: 'Total MPS'
      },
      chart: {
          renderTo: 'columnchart',
          type: 'column'
      },
      xAxis: {
        type: 'category',
        labels: {
          rotation: 90,
          style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
          }
        }
      },
      yAxis: {
        title: {
          text: 'Total'
        }
      },
      series: [{}]
  };

  $.ajax({
          type: 'POST',
          url: base_url+'index.php/beranda/DataColumn/',
          dataType: 'json',
          data: {Tahun:Tahun,KdBarang:KdBarang},
          cache: false,
          success: function(response)
          {
            var status = response["status"];
            if(status == true)
            {
                var data = response["data"];
                if (data.length > 0) 
                {
                    var Data = [];
        
                    for( var i = 0, len = data.length; i < len; i++ ) 
                    {
                        var item = data[i];
                        Data.push({name:item["Bulan"], y:item["Nilai"]});
                    }

                    options.series[0].name = "Total Perbulan";
                    options.series[0].data = Data;

                    var chart = new Highcharts.Chart(options);
                }
                else
                {
                    alert("Data untuk pilihan " + Tahun + " Tidak Ditemukan!");
                }
            }
            else
            {
                var message = response["message"];
                alert(message);
            }
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) 
          {
              alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
          }
  });

}