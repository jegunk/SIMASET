var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/master/mps/getList",
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

    closemodal();
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/popup/barang/getDetailBarang/'+KdBarang,
            dataType: 'json',
            cache: false,
            success: function(response)
            {
                var KdBarang = response["KdBarang"];
                var NamaBarang = response["NamaBarang"];
                var KdSatuanBarang = response["KdSatuanBarang2"];
                var SatuanBarang = response["SatuanBarang2"];

                $("#KdBarang").val(KdBarang);
                $("#NamaBarang").val(NamaBarang);
                $("#KdSatuanBarang").val(KdSatuanBarang);
                $("#SatuanBarang").val(SatuanBarang);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
    });
}