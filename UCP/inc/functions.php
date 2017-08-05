<?php
// 				  	  Functions
// ==================================================

// GENERAL FUNCTIONS
function IssetPage()
{
	if(!isset($_GET['page']))
	{
		header("Location: /?page=login");
	}
}

function isLoggedin()
{
	if(isset($_SESSION['UID']))
	{
		header("Location: /?page=dashboard");
	}
}

function checkLoggedIn()
{
	if(!isset($_SESSION['UID']))
	{
		header("Location: /?page=login");
	}
}

function isAdmin()
{
	
}

function Logged()
{
	if(isset($_SESSION['UID']))
	{
		return 1;
	}
	else
	{
		return 0;
	}
}

function GetIP()
{
	$ip = $_SERVER['REMOTE_ADDR'];
	return $ip;
}

function GetHost()
{
	return gethostbyaddr(GetIP());
}

function Browsers()
{
	$u_agent = $_SERVER['HTTP_USER_AGENT']; 
	$bname = 'Unknown';
	$platform = 'Unknown';
	$version= "";

	if (preg_match('/linux/i', $u_agent))
	{
		$platform = 'Linux';
	}
	elseif (preg_match('/macintosh|mac os x/i', $u_agent))
	{
		$platform = 'Mac';
	}
	elseif (preg_match('/windows|win32/i', $u_agent))
	{
		$platform = 'Windows';
	}
	if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
	{ 
		$bname = 'Internet Explorer'; 
		$ub = "MSIE"; 
	} 
	elseif(preg_match('/Firefox/i',$u_agent)) 
	{ 
		$bname = 'Mozilla Firefox'; 
		$ub = "Firefox"; 
	} 
	elseif(preg_match('/Chrome/i',$u_agent)) 
	{ 
		$bname = 'Google Chrome'; 
		$ub = "Chrome"; 
	} 
	elseif(preg_match('/Safari/i',$u_agent)) 
	{ 
		$bname = 'Apple Safari'; 
		$ub = "Safari"; 
	} 
	elseif(preg_match('/Opera/i',$u_agent)) 
	{ 
		$bname = 'Opera'; 
		$ub = "Opera"; 
	} 
	elseif(preg_match('/Netscape/i',$u_agent)) 
	{ 
		$bname = 'Netscape'; 
		$ub = "Netscape"; 
	}
	
	$known = array('Version', $ub, 'other');
	$pattern = '#(?<browser>' . join('|', $known) .
	')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
	if (!preg_match_all($pattern, $u_agent, $matches))
	{
		
	}
	$i = count($matches['browser']);
	if ($i != 1)
	{
		if (strripos($u_agent,"Version") < strripos($u_agent,$ub))
		{
			$version= $matches['version'][0];
		}
		else
		{
			$version= $matches['version'][1];
		}
	}
	else
	{
		$version= $matches['version'][0];
	}
	if ($version==null || $version=="") {$version="?";}
	return array(
		'userAgent' => $u_agent,
		'name'      => $bname,
		'version'   => $version,
		'platform'  => $platform,
		'pattern'    => $pattern
	);
}

function GetBrowser() 
{
	$ua = Browsers();
	return $browser_name = "" . $ua['name'] . " (" .$ua['platform'] . ")";
}

function GetTimezone()
{
	return date_default_timezone_set('Europe/Amsterdam');
	return setlocale (LC_ALL, "no_NO.utf8");
}

function GDate($type)
{
	switch($type)
	{
		case 1:
		{
			$date = date('m/d/Y');
			return $date;
		}
		break;
		
		case 2:
		{
			$date = date('m/d/Y (H:i)');
			return $date;
		}
		break;
		
		case 3:
		{
			$date = date('j F Y');
			return $date;
		}
		break;
	}
}

function GetMessage($subject, $message, $type)
{
	switch($type)
	{
		case 1: // Error
		{
			echo "
			<div class='alert alert-danger' id='message'>
				<strong>$subject</strong> $message
			</div>
			";
		} break;
		case 2: // Warning
		{
			echo "
			<div class='alert alert-warning' id='message'>
				<strong>$subject</strong> $message
			</div>
			";
		} break;
		case 3: // Success
		{
			echo "
			<div class='alert alert-success' id='message'>
				<strong>$subject</strong> $message
			</div>
			";
		} break;
		case 4: // Error (without fadeout)
		{
			echo "
			<div class='alert alert-danger'>
				<strong>$subject</strong> $message
			</div>
			";
		} break;
		case 5: // Warning (without fadeout)
		{
			echo "
			<div class='alert alert-warning'>
				<strong>$subject</strong> $message
			</div>
			";
		} break;
		case 6: // Success (without fadeout)
		{
			echo "
			<div class='alert alert-success'>
				<strong>$subject</strong> $message
			</div>
			";
		} break;
	}
}

// 2FA FUNCTIONS
function Generate2FA()
{
	global $name;
	global $UID;
	global $pdo;
	require($_SERVER['DOCUMENT_ROOT'].'/inc/2fa/GoogleAuthenticator.php');
	
	$ga = new PHPGangsta_GoogleAuthenticator();
	
	$query = $pdo->prepare("SELECT * FROM Users WHERE UID = :UID");
	$query->execute(array(':UID' => $UID));

	while($row = $query->fetch(PDO::FETCH_ASSOC))
	{
		$MySecret = $row['2FA_Secret'];
		
		if($MySecret == '0')
		{
			$secret = $ga->createSecret();
			$qrCodeUrl = $ga->getQRCodeGoogleUrl($name, $secret);
			echo "<img src='$qrCodeUrl' />";
			
			$query2 = $pdo->prepare("UPDATE Users SET 2FA_Secret = :2FA_Secret WHERE UID = :UID");
			$query2->execute(array(':2FA_Secret' => $secret, ':UID' => $UID));
		}
		else
		{
			echo "You already have 2FA enabled. Your QR image is:<br><br>";
			$qrCodeUrl = $ga->getQRCodeGoogleUrl($name, $MySecret);
			echo "<img src='$qrCodeUrl' />";
		}
	}
}

function Verify2FA()
{
	global $pdo;
	global $UID;
	require($_SERVER['DOCUMENT_ROOT'].'/inc/2fa/GoogleAuthenticator.php');
	
	$ga = new PHPGangsta_GoogleAuthenticator();
	
	$query = $pdo->prepare("SELECT * FROM Users WHERE UID = :UID");
	$query->execute(array(':UID' => $UID));

	while($row = $query->fetch(PDO::FETCH_ASSOC))
	{
		$MySecret = $row['2FA_Secret'];
		$form_secret = $_POST['form_secret'];
		
		if($MySecret !== '0')
		{
			$checkResult = $ga->verifyCode($MySecret, $form_secret, 2);
			
			if($checkResult)
			{
				echo 'OK';
			}
			else
			{
				echo 'FAILED';
			}
		}
		else
		{
			echo "You do not have 2FA enabled.";
		}
	}
}

// MAIL FUNCTIONS
function sendMail($mail_subject, $mail_recipient, $mail_message)
{
	global $from_email;
	global $name;
	require($_SERVER['DOCUMENT_ROOT'].'/inc/phpmailer/class.phpmailer.php');
	include($_SERVER['DOCUMENT_ROOT'].'/inc/mailer.php');
	
	$sender = $from_email;
	$replyto = $from_email;
	$subject = $mail_subject;
	$recipient = $mail_recipient;
	
	$message = $mail_message;

	$mail->SetFrom($sender, $name);
	$mail->AddReplyTo($replyto, $name);
	$mail->Subject = $subject;
	$mail->MsgHTML($message);
	$mail->AddAddress($recipient, $name);

	$result = $mail->Send(); 
	return $result;
	unset($mail);
}

// DATABASE FUNCTIONS
function GetData($input, $state)
{
	global $pdo;
	if(Logged() == 1)
	{
		$query = $pdo->prepare("SELECT * FROM Users WHERE UID = :input");
		$query->execute(array(':input' => $input));
		
		if($query->rowCount() > 0)
		{
			while($row = $query->fetch(PDO::FETCH_ASSOC))
			{
				return $row[$state];
			}
		}
		else
		{
			return 0;
		}
	}
}

function Logs($type, $input)
{
	// Type 1: User logs
	// Type 2: Admin logs
	// Type 3: Payment logs
	global $pdo;
	global $UID;
	$query = $pdo->prepare("INSERT INTO acp_logs (uid, type, date, IP, browser, hostname, log)
	VALUES (:uid, :type, :date, :IP, :browser, :hostname, :log)");
	$query->execute(array(
	':uid' => $_SESSION['UID'],
	':type' => $type,
	':date' => GDate(2),
	':IP' => GetIP(),
	':browser' => GetBrowser(),
	':hostname' => GetHost(),
	':log' => $input
	));
}

function UserLogin()
{
	global $pdo;
	if($_POST['email'] !== '' AND $_POST['password'] !== '')
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = hash('whirlpool', $password);
		$password = strtoupper($password);

		$query = $pdo->prepare("SELECT * FROM acp_users WHERE email = :email");
		$query->execute(array(':email' => $email));
		
		if($query->rowCount() > 0)
		{
			while($row = $query->fetch(PDO::FETCH_ASSOC))
			{
				$user_ID = $row['id'];
				
				$query2 = $pdo->prepare("SELECT * FROM acp_users WHERE email = :email AND password = :password");
				$query2->execute(array(':email' => $email, ':password' => $password));

				if($query2->rowCount() > 0)
				{
					$_SESSION['UID'] = $user_ID;
					Logs(1, "Successfully logged in");
					echo '<script>window.location=\'?page=dashboard\'</script>';
				}
				else
				{
					GetMessage("Oops!", "Looks like your login credentials are incorrect. Please try again!", 1);
				}
			}
		}
		else
		{
			GetMessage("Oops!", "Your account does not exist in our database. Please try again later!", 1);
		}
	}
	else
	{
		GetMessage("Oh snap!", "Make sure you fill out all the fields below. Please try again!", 1);
	}
}

?>