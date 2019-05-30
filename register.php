<?php require_once 'assets/include/config.inc.php';?>

<?php
try {
	
if(isset($_SESSION['logged'])){
	header('Location:/početna-strana');
die();	
}

	
}
catch ( PDOException $exception ){
echo $exception -> getMessage();
}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Besplatna registracija | Besplatni mali oglasi</title>
<meta name="author" content="Milan Janković">
<meta name="subject" content="Besplatni mali oglasi">
<meta name="Description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta name="Classification" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta name="Keywords" content="besplatni,mali,oglasi.video,slika,">
<meta name="Language" content="Србија">
<meta HTTP-EQUIV="Expires" content="Never">
<meta HTTP-EQUIV="CACHE-CONTROL" content="PUBLIC">
<meta name="Copyright" content="Milan Janković">
<meta name="Designer" content="Milan Janković">
<meta name="Publisher" content="Milan Janković">
<meta name="distribution" content="Global">
<meta name="Robots" content="INDEX,FOLLOW">
<meta name="zipcode" content="18000">
<meta name="city" content="Niš">
<meta name="country" content="Srbija">
<meta property="og:title" content="Besplatna registraicja | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/registracija">
<meta property="og:description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta property="og:type" content="article">
<meta property="og:image" content="">
<?php include_once("assets/include/meta-search-engines.inc.php") ?>
    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
 <script src='https://www.google.com/recaptcha/api.js'></script>
 

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php include_once("assets/include/analyticstracking.php") ?>

<?php include_once("assets/include/facebook_sdk.php") ?>


<?php include_once("assets/include/header.inc.php") ?>

<?php include_once("assets/include/nav.inc.php") ?>

<?php include_once("assets/include/show-instant-search-resault.inc.php") ?>

<div class="container">
<div class="col-md-8">
<div class="well well-sm">
<?php
try	{
if(isset($_POST['submit'])){

$username = (isset($_POST['username'])) ? htmlspecialchars(trim($_POST['username'])) : '';
$password = (isset($_POST['password'])) ? htmlspecialchars(trim($_POST['password'])) : '';
$repeat_password = (isset($_POST['repeat_password'])) ? htmlspecialchars(trim($_POST['repeat_password'])) : '';
$email = (isset($_POST['email'])) ? htmlspecialchars($_POST['email']) : '';
$first_name = (isset($_POST['first_name'])) ? htmlspecialchars($_POST['first_name']) : '';
$last_name = (isset($_POST['last_name'])) ? htmlspecialchars($_POST['last_name']) : '';
$state = (isset($_POST['state'])) ? htmlspecialchars($_POST['state']) : '';
$city = (isset($_POST['city'])) ? htmlspecialchars($_POST['city']) : '';
$postal_code = (isset($_POST['postal_code'])) ? htmlspecialchars($_POST['postal_code']) : '';
$address = (isset($_POST['address'])) ? htmlspecialchars($_POST['address']) : '';
$profile_image = basename( $_FILES["profile_image"]["name"]);
$datedime = date('Y-m-d H:i:s');
$allowed =  array('gif','png' ,'jpg' , 'tif');
$captcha  =  $_POST['g-recaptcha-response'];

$home_phone = (isset($_POST['home_phone'])) ? htmlspecialchars($_POST['home_phone']) : '';
$mobile_phone = (isset($_POST['mobile_phone'])) ? htmlspecialchars($_POST['mobile_phone']) : '';
$target_dir = "assets/images/user-images/$username/";
$product_images_dir = "assets/images/product-images/$username/";



if(!is_dir($target_dir)){
mkdir($target_dir , 0777);	
}


if(!is_dir($product_images_dir)){
mkdir($product_images_dir , 0777);	
}

$target_dir2 = "assets/images/user-images/$username/";

$product_images_dir2 = "assets/images/product-images/$username/";

if(!is_dir($target_dir2)){
mkdir($target_dir2 , 0777);	
}
if(!is_dir($product_images_dir2)){
mkdir($product_images_dir2 , 0777);	
}




$target_dir2 = $target_dir2 . basename( $_FILES["profile_image"]["name"]);


if(empty($username)){
$errors[] = 'Korisničko ime ne može da bude prazno.';	
}
if( strlen($username ) < 3 || strlen($username) > 13 ){
	
$errors[] = 'Korisničko ime ne može da bude manje od 3 i veće od 13 karaktera.';	
}

$allowed =  array('gif','png' ,'jpg','jpeg' );
$ext = pathinfo($profile_image, PATHINFO_EXTENSION);

if(!in_array($ext,$allowed) ) {
$errors[] = 'Pogrešan tip fajla za upload.';	
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Nepostojeća email adresa"; 
}

if(empty($password)){
$errors[] = 'Šifra ne može da bude prazna.';	
}
if(empty($repeat_password)){
$errors[] = 'Niste ponovili šifru.';	
}
if($password != $repeat_password ){
$errors[] ='Ponovite ispravno šifru';	
}


if( strlen($password ) <  5 ){
	
$errors[] = 'Vaša šifra ne može da bude manja od 5 karaktera.';	
}
if(!preg_match('/[A-Z0-9]/', $password)){
$errors[] = 'Vaša šifra mora da sadrži brojeve i velika slova';	
}
if(empty($email)){
$errors[] = 'Email adresa ne može da bude prazna.';	
}
if(empty($first_name)){
$errors[] = 'Ime ne može da bude prazno.';	
}
if(empty($state)){
$errors[] = 'Država ne može da bude prazna.';	
}
if(empty($city)){
$errors[] = 'Grad ne može da bude prazan.';	
}
if(empty($postal_code)){
$errors[] = 'Poštanski broj ne može da bude prazan.';	
}
if(empty($address)){
$errors[] = 'Adresa ne može da bude prazna.';	
}
if(empty($mobile_phone)){
$errors[] = 'Mobilni telefon ne može da bude prazan.';	
}
if(empty($home_phone)){
$errors[] = 'Fiksni telefon ne može da bude prazan.';	
}


if(empty($last_name)){
$errors[] = 'Prezime ne može da bude prazno.';	
}
if(!$captcha){
    $errors[] = 'Please check the the captcha form.';
}

$sql = 'select username from users where username = :username ';
$query = $db -> prepare (  $sql );
$query -> execute ( array( ':username' => $username ));
if($rows = $query -> rowCount() > 0 ){
$errors[] = 'Korisničko ime <strong>'.$username.'</strong> je već registrovano.';	
}


$sql = 'select email from users where email = :email ';
$query = $db -> prepare (  $sql );
$query -> execute ( array( ':email' => $email ));
if($rows = $query -> rowCount() > 0 ){
$errors[] = 'Email adresa <strong>'.$email.'</strong> je već registrovana.';	
}


if(count($errors ) > 0 ){
	
?>
<ul style="padding:15px 16px; margin:20px auto; list-style:none; display:block; background-color:#FFF color:red; border:1px solid #CCC;">
<li><h4>Došlo je do greške prilikom registracije.</h4></li>
<li>&nbsp;</li>
<?php
foreach ($errors as $error ){
?>	
	<li><?php echo $error;?></li>
<?php	
}
?>
</ul>
<?php	
	
}
else
{

if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_dir2)) {
	
	$options = [
	'cost' => 12 
	];
	$hashed_password = password_hash( $password , PASSWORD_DEFAULT , $options );
	
	



$sql = '

insert into users ( user_id , username , password , email , first_name , last_name , user_image , last_login , date_joined , state , city , postal_code , address , mobile_phone , home_phone  ) values (
null , :username , :password , :email , :first_name , :last_name , :user_image , :last_login , :date_joined , :state , :city , :postal_code , :address ,:mobile_phone , :home_phone  )
';
$query = $db -> prepare ( $sql );
$query -> execute( array  (
  
 ':username' =>  $username, 
 ':password' =>  $hashed_password, 
 ':email' =>  $email, 
 ':first_name' =>  $first_name, 
 ':last_name' =>  $last_name ,
 ':user_image' =>   $profile_image , 
 ':last_login' =>   $datedime  , 
 ':date_joined' =>   $datedime  ,
 ':state' => $state , 
 ':city' => $city , 
 ':postal_code' => $postal_code , 
 ':address' => $address ,
 ':mobile_phone' => $mobile_phone , 
 ':home_phone' => $home_phone  
 
 ));

$message = 'Hvala vam što ste se registrovali na našem sajtu.';

	header('Refresh:3;URL=login.php');
	echo '<p style="padding:7px 0px;">Hvala vam <strong>'.$username.'</strong> što ste se registrovali na našem sajtu.</p>';
} else {
    echo '<h4 class="error1">Došlo je do greško prilikom registracije.</h4>';
}

}
}// kraj main isseta

}
catch ( PDOException $exception ){
echo $exception -> getMessage();
	
	die();
}
?>
            <form class="form-horizontal" role="form"  method="post" action="/registracija" enctype="multipart/form-data">
                <h2>Besplatna registracija</h2>
                
                
                <div class="form-group">
                    <label for="first_name" class="col-sm-3 control-label">Korisničko ime</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" placeholder="Korisničko ime" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="first_name" class="col-sm-3 control-label">Ime</label>
                    <div class="col-sm-9">
                        <input type="text" name="first_name" placeholder="Ime" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-3 control-label">Prezime</label>
                    <div class="col-sm-9">
                        <input type="text" name="last_name" placeholder="Prezime" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email adresa</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Email adresa" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Šifra</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Šifra" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="repeat_password" class="col-sm-3 control-label">Ponovite šifru</label>
                    <div class="col-sm-9">
                        <input type="password" name="repeat_password" placeholder="Ponovite šifru" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Država</label>
                    <div class="col-sm-9">
               <input type="text" name="state" placeholder="Država" class="form-control">
 </div>
                </div> <!-- /.form-group -->
                
                   <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Grad</label>
                    <div class="col-sm-9">
               <input type="text" name="city" placeholder="Grad" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Adresa</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" placeholder="Adresa" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                             <div class="form-group">
                    <label for="postal_code" class="col-sm-3 control-label">Poštanski broj</label>
                    <div class="col-sm-9">
                        <input type="text" name="postal_code" placeholder="Poštanski broj" class="form-control" autofocus>
                    </div>
                </div>

                      <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Fiksni telefon</label>
                    <div class="col-sm-9">
                        <input type="text" name="home_phone" placeholder="Fiksni telefon" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Mobilni telefon</label>
                    <div class="col-sm-9">
                        <input type="text" name="mobile_phone" placeholder="Mobilni telefon" class="form-control">
                    </div>
                </div> <!-- /.form-group -->
        

              <div class="form-group">
             <label class="control-label col-sm-3">Izaberite sliku</label>
       <div class="col-md-9 ">

<input type="file" name="profile_image">



</div>
                
                </div>

                <div class="form-group">
                                    <div class="col-md-9 col-xs-offset-3">
                <div class="g-recaptcha" data-sitekey="6LeFbQUTAAAAANM-b5ibXIeP8dgZq6UGfGLK7U0T"></div>

</div>
                
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Registruj se</button>
                    </div>
                </div>
            </form> <!-- /form -->


</div>

</div><!-- col-md-9 -->
<div class="col-md-4">

<?php include_once("assets/include/sidebar-2.inc.php") ?>


</div><!-- col-md-4 -->

        </div> <!-- ./container -->
        <br><br>








<?php include_once("assets/include/footer.inc.php") ?>

<?php include_once("assets/include/jqueryscript.inc.php") ?>

<?php include_once("assets/include/ajax-live-search-script.php") ?>

<script type="text/javascript" src="/assets/js/list-grid-script-view-add-page.js"></script>

<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>