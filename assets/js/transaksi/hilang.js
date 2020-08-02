var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/transaksi/hilang/getList",
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
            url: base_url+'index.php/popup/Aset_rusak/',
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
                            "url": base_url+"index.php/popup/Aset_rusak/getList",
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

function pilihBarang(kode_aset)
{
    if(cekBarangExist(kode_aset) == true)
    {
        closemodal();
        var counter = parseInt($("#counter").val());
        var newcounter = parseInt(counter+1);
        $.ajax({
                type: 'GET',
                url: base_url+'index.php/transaksi/rusak/getAset/'+kode_aset,
                dataType: 'json',
                cache: false,
                success: function(response)
                {
                    var kode_aset = response["kode_aset"];
                    var kode_aktiva = response["kode_aktiva1"];
                    var kode_jenis_barang = response["kode_jenis_barang1"];
                    var nama_barang = response["nama_barang"];
                    var kode_dept = response["kode_dept1"];
                    var gambar = response["gambar"];
                    

                    var html = "<tr id='baris"+newcounter+"'>";
                    html += "<td>"+kode_aset+"<input type='hidden' class='form-control' name='kode_aset[]' id='kode_aset"+newcounter+"' value='"+kode_aset+"'></td>"
                    html += "<td>"+kode_aktiva+"</td>"
                    html += "<td>"+kode_jenis_barang+"</td>"
                    html += "<td>"+nama_barang+"</td>"
                    html += "<td>"+kode_dept+"</td>"
                    html += "<td><img src="+base_url+'assets/upload/img/aset/'+gambar+"></td>"
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
        alert("ASET " + kode_aset + " sudah ada dalam transaksi.");
    }
}

function cekBarangExist(kode_aset)
{
   var totalBaris = parseInt($("#counter").val());
   var status = true;
   for(x=0;x<=totalBaris;x++)
   {
        if(kode_aset == $("#kode_aset"+x).val())
        {
            status = false;
        }
   }

   return status;
}

function hapusBaris(kode_aset)
{
    var conf = confirm("Anda yakin menghapus baris ini?");
    if(conf == true)
    {
        $("#baris"+kode_aset).remove();
    }
}

