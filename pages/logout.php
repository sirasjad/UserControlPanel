<?php
	$_SESSION['UID'] = 0;
	session_destroy();
	header("Location: /?page=login");
?>