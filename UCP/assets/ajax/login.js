function loginUser()
{
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var dataString='email='+email + '&password='+password;
	
	$.ajax(
	{
		type:"post",
		url: "/?page=ajax&function=userlogin",
		data:dataString,
		cache:false,
		success: function(html)
		{
			$('#ajax').html(html);
		}
	});
	return false;
}