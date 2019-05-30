<?php require_once 'assets/include/config.inc.php';


if(isset($_SESSION['logged'])){
session_destroy();
header('Location:/početna-strana');
die();	
	}









?>
