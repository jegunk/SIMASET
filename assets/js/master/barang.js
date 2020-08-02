var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/master/barang/getList",
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
            url: base_url+'index.php/master/barang/add',
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

function view(KdBarang)
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/master/barang/view',
            dataType: 'html',
            data: {"KdBarang":KdBarang},
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