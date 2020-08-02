var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/master/jenisbarang/getList",
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

function add()
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/master/jenisbarang/add',
            dataType: 'html',
            cache: false,
            success: function(response)
            {
                showmodal(response);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
    });
}

function view(kode_jenis_barang)
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/master/jenisbarang/view',
            dataType: 'html',
            data: {"kode_jenis_barang":kode_jenis_barang},
            cache: false,
            success: function(response)
            {
                showmodal(response);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) 
            {
                alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
            }
    });
}