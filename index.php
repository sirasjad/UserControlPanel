<!-- Coded by Sira @ PR-RP | Contact: sirasjad@gmail.com -->

<?php
session_start(); ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require($_SERVER['DOCUMENT_ROOT'].'/inc/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/inc/db.php');
require($_SERVER['DOCUMENT_ROOT'].'/inc/functions.php');

// Global sessions
if(isset($_SESSION['UID'])) { $UID = $_SESSION['UID']; }

// Global functions
IssetPage();
GetTimezone();

// All pages
switch($_GET['page'])
{
	case 'ajax': include("assets/ajax/ajax.php"); break;
	case 'login': include("pages/login.php"); break;
	case 'logout': include("pages/logout.php"); break;
	case 'dashboard': include("pages/dashboard.php"); break;
	case 'settings': include("pages/settings.php"); break;
	case 'character': include("pages/character.php"); break;
	case 'online': include("pages/online.php"); break;
	case 'wall-of-fame': include("pages/wall-of-fame.php"); break;
	case 'staff-management': include("pages/staff-management.php"); break;
	default: include("pages/login.php"); break;
}

?>