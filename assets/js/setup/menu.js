function ubahjenis()
{
	id_menu = $("#id_menu").val();
	jenis_menu = $("#jenis").val();
	judul_menu = $("#judul").val();
	parent_menu = $("#parent").val();
	url = $("#url").val();
	posisi = $("#posisi").val();
	status = $("#status").val();
	
	if(jenis_menu == '0')
	{
		$("#rowparent").hide("slow");
		$("#rowposisi").hide("slow");
		$("#parent").attr("required",false);
	}
	if(jenis_menu == '1')
	{
		$("#parent").val("");
		$("#rowparent").show("slow");
		$("#parent").attr("required",true);
	}
}

function showposisi()
{
	var baseurl = $("#baseurl").val();
	var parent = addslashes($("#parent").val().trim());
	if(parent!="" && baseurl!='')
	{
		$.ajax({
			type: 'GET',
			url: baseurl+'index.php/setup/menu/getPosition/'+parent,
			dataType: 'json',
			cache: false,
			success: function(resp)
			{
				Success = resp['Success'];
				Message = resp['Message'];
				
				if(Success == 1)
				{
					$("#rowposisi").show("slow");
					$("#posisi").val(Message);
				}
				else if(Success == 0)
				{
					alert(Message);
				}
				else
				{
					alert(json_decode(resp));
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) 
			{
				alert(XMLHttpRequest.status + '\n' + textStatus + '\n' + errorThrown);
			}
		});
	}
}