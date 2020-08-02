var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/transaksi/spk/getList",
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
            url: base_url+'index.php/popup/barang_spk/',
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
                            "url": base_url+"index.php/popup/barang_spk/getList",
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
                url: base_url+'index.php/transaksi/spk/getBOM/'+KdBarang,
                dataType: 'json',
                cache: false,
                success: function(response)
                {
                    var KdBarang = response["KdBarang"];
                    var NamaBarang = response["NamaBarang"];
                    var KdSatuanBarang = response["KdSatuanBarang"];
                    var SatuanBarang = response["SatuanBarang"];
                    var KdBahanBaku = response["KdBahanBaku"];
                    var NamaBahanBaku = response["NamaBahanBaku"];
                    var KdSatuanBahanBaku = response["KdSatuanBahanBaku"];
                    var SatuanBahanBaku = response["SatuanBahanBaku"];
                    var Konversi = response["Konversi"];
                    var QtyBom = response["QtyBom"];
                    var KdSatuanGudang = response["KdSatuanGudang"];
                    var SatuanBarangGudang = response["SatuanBarangGudang"];

                    var html = "<tr id='baris"+newcounter+"'>";
                    html += "<td><input type='text' class='form-control' name='KdBarang[]' id='KdBarang"+newcounter+"' value='"+KdBarang+"' readonly='readonly'></td>"
                    html += "<td><input type='text' class='form-control' name='NamaBarang[]' id='NamaBarang"+newcounter+"' value='"+NamaBarang+"' readonly='readonly'></td>"
                    html += "<td>";
                    html += "<input type='hidden' class='form-control' name='KdSatuanBarang[]' id='KdSatuanBarang"+newcounter+"' value='"+KdSatuanBarang+"' readonly='readonly'>";
                    html += "<input type='text' class='form-control' name='SatuanBarang[]' id='SatuanBarang"+newcounter+"' value='"+SatuanBarang+"' readonly='readonly'>";
                    html += "</td>";
                    html += "<td><input type='text' class='form-control' name='QtyBarang[]' id='QtyBarang"+newcounter+"' value='' onKeyUp=HitungSPK('"+newcounter+"'); data-validation='number' data-validation-allowing='float' data-validation-decimal-separator='.'' placeholder='Qty' data-validation-error-msg='Qty harus diisi, hanya angka.''></td>";
                    html += "<td><input type='text' class='form-control' name='KdBahanBaku[]' id='KdBahanBaku"+newcounter+"' value='"+KdBahanBaku+"' readonly='readonly'></td>"
                    html += "<td><input type='text' class='form-control' name='NamaBahanBaku[]' id='NamaBahanBaku"+newcounter+"' value='"+NamaBahanBaku+"' readonly='readonly'></td>"
                    html += "<td>";
                    html += "<input type='hidden' class='form-control' name='KdSatuanBahanBaku[]' id='KdSatuanBahanBaku"+newcounter+"' value='"+KdSatuanBahanBaku+"' readonly='readonly'>";
                    html += "<input type='text' class='form-control' name='SatuanBahanBaku[]' id='SatuanBahanBaku"+newcounter+"' value='"+SatuanBahanBaku+"' readonly='readonly'>";
                    html += "</td>";
                    html += "<td><input type='text' class='form-control' name='QtyBahanBaku[]' id='QtyBahanBaku"+newcounter+"' value='0' readonly='readonly'></td>";
                    html += "<td>";
                    html += "<input type='hidden' class='form-control' name='QtyBom[]' id='QtyBom"+newcounter+"' value='"+QtyBom+"' readonly='readonly'>";
                    html += "<input type='hidden' class='form-control' name='Konversi[]' id='Konversi"+newcounter+"' value='"+Konversi+"' readonly='readonly'>";
                    html += "<input type='hidden' class='form-control' name='KdSatuanGudang[]' id='KdSatuanGudang"+newcounter+"' value='"+KdSatuanGudang+"' readonly='readonly'>";
                    html += "<input type='text' class='form-control' name='SatuanBarangGudang[]' id='SatuanBarangGudang"+newcounter+"' value='"+SatuanBarangGudang+"' readonly='readonly'>";
                    html += "</td>";
                    html += "<td><input type='text' class='form-control' name='QtyBarangGudang[]' id='QtyBarangGudang"+newcounter+"' value='0' readonly='readonly'></td>";
                    html += "<td><input type='text' class='form-control' name='Pembulatan[]' id='Pembulatan"+newcounter+"' value='0' readonly='readonly'></td>";
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
        alert("Barang " + KdBarang + " sudah ada dalam transaksi.");
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

function HitungSPK(id)
{

    var QtyBarang = parseFloat($("#QtyBarang"+id).val());
    var Konversi = parseFloat($("#Konversi"+id).val());
    var QtyBom = parseFloat($("#QtyBom"+id).val());

    var QtyBahanBaku = parseFloat(QtyBom*QtyBarang);
    var QtyBarangGudang = parseFloat(QtyBahanBaku/Konversi);
    var Pembulatan = Math.ceil(QtyBarangGudang);

    $("#QtyBahanBaku"+id).val(QtyBahanBaku);
    $("#QtyBarangGudang"+id).val(QtyBarangGudang);
    $("#Pembulatan"+id).val(Pembulatan);
}