<?php
// 				  Mail settings
// ==================================================
global $pdo;

$query = $pdo->prepare("SELECT * FROM EmailSettings");
$query->execute();

while($row = $query->fetch(PDO::FETCH_ASSOC))
{	
	$email_host = $row['Host'];
	$email_port = $row['Port'];
	$email_username = $row['Username'];
	$email_password = $row['Password'];
}

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->CharSet = 'UTF-8';
$mail->Host = $email_host;
$mail->Port = $email_port;
$mail->Username = $email_username;
$mail->Password = $email_password;

?>