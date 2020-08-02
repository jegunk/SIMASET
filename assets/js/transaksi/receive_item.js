var table;
$(document).ready(function() {
    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/transaksi/receive_item/getList",
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

function showListPO()
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/popup/po/',
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
                            "url": base_url+"index.php/popup/po/getList",
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

function pilihPO(NoDokumen)
{
    closemodal();

    $.ajax({
            type: 'POST',
            url: base_url+'index.php/transaksi/receive_item/getDetailPO',
            dataType: 'json',
            cache: false,
            data: {NoDokumen:NoDokumen},
            success: function(response)
            {
                var counter = parseInt(0);
                var html = "";

                $("#NoPO").val(NoDokumen);
                for(x=0;x<(response.length);x++)
                {
                    var newcounter = parseInt(counter+1);
                    html += "<tr id='baris"+newcounter+"'>";
                    html += "<td>";
                    html += "<input type='text' readonly='true' name='KdBarang[]' id='KdBarang"+newcounter+"' value='"+response[x]['KdBarang']+"' class='form-control'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<input type='text' readonly='true' name='NamaBarang[]' id='NamaBarang"+newcounter+"' value='"+response[x]['NamaBarang']+"' class='form-control'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<input type='hidden' readonly='true' name='KdSatuanBarang[]' id='KdSatuanBarang"+newcounter+"' value='"+response[x]['KdSatuanBarang']+"' class='form-control'>";
                    html += "<input type='text' readonly='true' name='SatuanBarang[]' id='SatuanBarang"+newcounter+"' value='"+response[x]['SatuanBarang']+"' class='form-control'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<input type='number' readonly='readonly' name='QtyPO[]' id='QtyPO"+newcounter+"' value='"+response[x]['Qty']+"' class='form-control' data-validation='number' placeholder='Qty PO' data-validation-error-msg='Qty PO harus diisi'>";
                    html += "</td>";
                    html += "<td>";
                    html += "<input type='number' name='Qty[]' id='Qty"+newcounter+"' value='' class='form-control' data-validation='number' placeholder='Qty' data-validation-error-msg='Qty harus diisi'>";
                    html += "</td>";
                    html += "</tr>";
                }

                $("table tbody").append(html);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
    });
}