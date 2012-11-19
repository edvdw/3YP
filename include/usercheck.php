<script type="text/javascript" src="js/vendor/jquery-1.2.6.min.js"></script>
<style type="text/css">
.object_ok
{
	border: 1px solid green; 
	color: #333333; 
}

.object_error
{
	border: 1px solid #AC3962; 
	color: #333333; 
}
</style>       
<script type="text/javascript">
/*
Credits: Bit Repository
Source: http://www.bitrepository.com/web-programming/ajax/username-checker.html 
*/

pic1 = new Image(16, 16); 
pic1.src = "img/loader.gif";

$(document).ready(function()
{
	$("#username").change(function() 
	{ 
		var usr = $("#username").val();

		if(usr.length >= 4)
		{
			$("#status").html('<img src="img/loader.gif" align="absmiddle">&nbsp;Checking availability...');

	    		$.ajax(
	    		{  
	    			type: "POST",  
	   			url: "login/check.php",  
	    			data: "username="+ usr,  
	    			success: function(msg)
	    			{  
	   
	   				$("#status").ajaxComplete(function(event, request, settings)
	   				{ 

						if(msg == 'OK')
						{ 
							$("#username").removeClass('object_error'); // if necessary
							$("#username").addClass("object_ok");
							$(this).html('&nbsp;<img src="img/tick.gif" align="absmiddle">');
						}  
						else  
						{  
							$("#username").removeClass('object_ok'); // if necessary
							$("#username").addClass("object_error");
							$(this).html(msg);
						}  
  					});
 				} 
  			}); 
		}
		else
		{
			$("#status").html('<font color="red">The username must be <strong>4-12</strong> characters.</font>');
			$("#username").removeClass('object_ok'); // if necessary
			$("#username").addClass("object_error");
		}

	});

});
</script>
