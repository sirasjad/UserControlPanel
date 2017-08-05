<?php

if(isset($_GET['function']))
{
	if($_GET['function'] !== '')
	{
		switch($_GET['function'])
		{
			case 'userlogin': UserLogin(); break;
		}
	}
	else
	{
		header('Location: /?=login');
	}
}
else
{
	header('Location: /?=login');
}

?>