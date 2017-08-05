function registerUser()
{
	var email = document.getElementById('email').value;
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var dataString='email='+email + '&username='+username + '&password='+password;
	
	$.ajax(
	{
		type:"post",
		url: "/?page=ajax&function=userregister",
		data:dataString,
		cache:false,
		success: function(html)
		{
			$('#ajax').html(html);
		}
	});
	return false;
}