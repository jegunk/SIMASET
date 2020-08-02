var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/master/bom/getList",
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

function showListBarang()
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/popup/barang_bom/',
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
                            "url": base_url+"index.php/popup/barang_bom/getList",
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
    $("#KdBarang").val(KdBarang);
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/popup/barang/getDetailBarang/'+KdBarang,
            dataType: 'json',
            cache: false,
            success: function(response)
            {
                NamaBarang = response["NamaBarang"]; 
                KdSatuanBarang = response["KdSatuanBarang2"]; 
                SatuanBarang = response["SatuanBarang2"]; 
                $("#Barang").val(NamaBarang);
                $("#KdSatuanBarang").val(KdSatuanBarang);
                $("#SatuanBarang").val(SatuanBarang);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
    });
}

function showListBahanbaku()
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/popup/bahanbaku/',
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
                            "url": base_url+"index.php/popup/bahanbaku/getList",
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

function pilihBahanbaku(KdBarang)
{
    closemodal();
    $("#KdBahanbaku").val(KdBarang);
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/popup/barang/getDetailBarang/'+KdBarang,
            dataType: 'json',
            cache: false,
            success: function(response)
            {
                NamaBarang = response["NamaBarang"]; 
                KdSatuanBarang = response["KdSatuanBarang3"]; 
                SatuanBarang = response["SatuanBarang3"]; 
                $("#Bahanbaku").val(NamaBarang);
                $("#KdSatuanBahanBaku").val(KdSatuanBarang);
                $("#SatuanBahanBaku").val(SatuanBarang);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
    });
}