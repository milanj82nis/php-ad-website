<?php require_once 'assets/include/config.inc.php';




$product_id = (isset($_POST['product_id'])) ? $_POST['product_id']:'';
$qty = (isset($_POST['qty']) && ctype_digit($_POST['qty'])) ? $_POST['qty']:0;
$action = (isset($_POST['submit'])) ? $_POST['submit']:'';
$product_name= (isset($_POST['product_name'])) ? $_POST['product_name']:'';
$product_image_1= (isset($_POST['product_image_1'])) ? $_POST['product_image_1']:'';
$product_image_2= (isset($_POST['product_image_2'])) ? $_POST['product_image_2']:'';
$product_image_3= (isset($_POST['product_image_3'])) ? $_POST['product_image_3']:'';
$product_description= (isset($_POST['product_description'])) ? $_POST['product_description']:'';
$product_price= (isset($_POST['product_price'])) ? $_POST['product_price']:'';
$customer_id = $_SESSION['user_id'];
$user_id = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : '';
$previous_url = $_SERVER['HTTP_REFERER'];

switch ($action){
	
		case 'Pošalji poruku';




		header('Location:'.$previous_url.'');
		die();
		break;

	
		case 'Prati oglas';




		header('Location:'.$previous_url.'');
		die();
		break;

	
		case 'Prijavi oglas';




		header('Location:'.$previous_url.'');
		die();
		break;








}// kraj switch
?>

