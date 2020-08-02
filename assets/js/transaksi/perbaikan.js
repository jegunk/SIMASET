var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/transaksi/perbaikan/getList",
                "type": "POST"
        },
        "columnDefs": [
            {  
                "targets": [ 0 ], 
                "orderable": false, 
            },
        ],
    });

});

function showBarang()
{
	$.ajax({ 
            type: 'GET',
            url: base_url+'index.php/popup/Aset_perbaikan/',
            dataType: 'html',
            cache: false,
            success: function(response)
            {
                showmodal(response);
                $('.dataTables').DataTable({ 
                    "processing": true, 
                    "serverSide": true, 
                    "order": [],             
                    "ajax": {
                            "url": base_url+"index.php/popup/Aset_perbaikan/getList",
                            "type": "POST"
                    },
                    "columnDefs": [
                        { 
                            "targets": [ 0 ], 
                            "orderable": false, 
                        },
                    ],
                });
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
    });
}

function pilihBarang(kode_rusak)
{
    if(cekBarangExist(kode_rusak) == true)
    {
        closemodal();
        var counter = parseInt($("#counter").val());
        var newcounter = parseInt(counter+1);
        $.ajax({
                type: 'GET',
                url: base_url+'index.php/transaksi/perbaikan/getrusak/'+kode_rusak,
                dataType: 'json',
                cache: false,
                success: function(response)
                {
                    var kode_rusak = response["kode_rusak"];
                    var kode_aset = response["kode_aset"];
                    var nama_barang = response["nama_barang1"];
                    var keterangan = response["keterangan"];
                    var gambar = response["gambar"];
                    

                    var html = "<tr id='baris"+newcounter+"'>";
                    html += "<td>"+kode_rusak+"<input type='hidden' class='form-control' name='kode_rusak' id='kode_rusak"+newcounter+"' value='"+kode_rusak+"'></td>"
                    html += "<td>"+kode_aset+"</td>"
                    html += "<td>"+nama_barang+"</td>"
                    html += "<td>"+keterangan+"</td>"
                    html += "<td><img src="+base_url+'assets/upload/img/rusak/'+gambar+"></td>"
                    html += "<td><button type='button' class='btn btn-danger btn-sm' onclick=hapusBaris('"+newcounter+"');>Hapus</button></td>";    
                    html += "</tr>";
                    
                    $("table tbody").append(html);
                    $("#counter").val(newcounter);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) 
                {
                    alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
                }
        });
    }
    else
    {
        alert("ASET" + kode_rusak + " sudah ada dalam transaksi.");
    }
}

function cekBarangExist(kode_rusak)
{
   var totalBaris = parseInt($("#counter").val());
   var status = true;
   for(x=0;x<=totalBaris;x++)
   {
        if(kode_rusak == $("#kode_rusak"+x).val())
        {
            status = false;
        }
   }

   return status;
}

function hapusBaris(kode_rusak)
{
    var conf = confirm("Anda yakin menghapus baris ini?");
    if(conf == true)
    {
        $("#baris"+kode_rusak).remove();
    }
}
