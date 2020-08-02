var table;
$(document).ready(function() {

    //datatables
	table = $('.dataTables').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],             
        "ajax": {
              	"url": base_url+"index.php/master/Dept/getList",
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
            url: base_url+'index.php/master/Dept/add',
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

function view(kode_dept)
{
    $.ajax({
            type: 'GET',
            url: base_url+'index.php/master/Dept/view',
            dataType: 'html',
            data: {"kode_dept":kode_dept},
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