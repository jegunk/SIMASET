base_url = $("#baseurl").val();

$(document).ready(function() {
    $.validate({
        modules : 'location, date, security, file',
        lang: 'en'
    });
});

function addslashes(string) {
    return string.replace(/\\/g, '\\\\').
        replace(/\u0008/g, '\\b').
        replace(/\t/g, '\\t').
        replace(/\n/g, '\\n').
        replace(/\f/g, '\\f').
        replace(/\r/g, '\\r').
        replace(/'/g, '\\\'').
        replace(/"/g, '\\"').
		replace('"','').
		replace("'",'').
		replace("/",'');
}

function openloader()
{
    $('#loader').modal({backdrop: 'static', keyboard: false});
}

function closeloader()
{
    $('#loader').modal('hide');
}

function showmodal(html)
{
    $('#modal .modal-body').html(html);
    $('#modal').modal({backdrop: 'static', keyboard: false});
    $.validate({
        modules : 'location, date, security, file',
        lang: 'en'
    });
}

function closemodal()
{
    $('#modal .modal-body').empty();
    $('#modal').modal('hide');
}