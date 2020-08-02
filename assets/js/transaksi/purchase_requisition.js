var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/transaksi/purchase_requisition/getList",
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
            url: base_url+'index.php/popup/barang/',
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
                            "url": base_url+"index.php/popup/barang/getList",
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

function pilihBarang(KdBarang)
{
    if(cekBarangExist(KdBarang) == true)
    {
        closemodal();
        var counter = parseInt($("#counter").val());
        var newcounter = parseInt(counter+1);
        $.ajax({
                type: 'GET',
                url: base_url+'index.php/popup/barang/getDetailBarang/'+KdBarang,
                dataType: 'json',
                cache: false,
                success: function(response)
                {
                    var NamaBarang = response["NamaBarang"];
                    var KdSatuanBarang = response["KdSatuanBarang1"];
                    var SatuanBarang = response["SatuanBarang1"];

                    var html = "<tr id='baris"+newcounter+"'>";
                    html += "<td>";
                    html += "<input type='text' readonly='true' name='KdBarang[]' id='KdBarang"+newcounter+"' value='"+KdBarang+"' class='form-control'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<input type='text' readonly='true' name='NamaBarang[]' id='NamaBarang"+newcounter+"' value='"+NamaBarang+"' class='form-control'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<input type='hidden' readonly='true' name='KdSatuanBarang[]' id='KdSatuanBarang"+newcounter+"' value='"+KdSatuanBarang+"' class='form-control'>";
                    html += "<input type='text' readonly='true' name='SatuanBarang[]' id='SatuanBarang"+newcounter+"' value='"+SatuanBarang+"' class='form-control'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<input type='number' name='Qty[]' id='Qty"+newcounter+"' value='' class='form-control' data-validation='number' placeholder='Qty' data-validation-error-msg='Qty harus diisi'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<button type='button' class='btn btn-danger btn-sm pull-right' onclick=hapusBaris('"+newcounter+"')>Hapus</button>";
                    html += "</td>";
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
        alert("Barang " + NamaBarang + " sudah ada dalam transaksi.");
    }
}

function cekBarangExist(KdBarang)
{
   var totalBaris = parseInt($("#counter").val());
   var status = true;
   for(x=0;x<=totalBaris;x++)
   {
        if(KdBarang == $("#KdBarang"+x).val())
        {
            status = false;
        }
   }

   return status;
}

function hapusBaris(id)
{
    var conf = confirm("Anda yakin menghapus baris ini?");
    if(conf == true)
    {
        $("#baris"+id).remove();
    }
}