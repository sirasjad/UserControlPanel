<?php
// 				 Database connection
// ==================================================

$host 			= 	'#';
$user 			= 	'#';
$password 		= 	'#';
$database_name 	= 	'#';

try
{
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
    echo '<strong>MySQL Error:</strong> ' . $e->getMessage();
	die();
}

?>