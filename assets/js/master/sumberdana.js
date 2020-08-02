var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
                "url": base_url+"index.php/master/sumberdana/getList",
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
            url: base_url+'index.php/master/sumberdana/add',
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

function view(kode_sumber)
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/master/sumberdana/view',
            dataType: 'html',
            data: {"kode_sumber":kode_sumber},
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