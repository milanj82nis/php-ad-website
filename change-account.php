<?php require_once 'assets/include/config.inc.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Promena naloga | Besplatni mali oglasi</title>
<meta name="author" content="Milan Janković">
<meta name="subject" content="Besplatni mali oglasi">
<meta name="Description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta name="Classification" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta name="Keywords" content="besplatni mali oglasi">
<meta name="Language" content="Srbija">
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
<meta property="og:title" content="Promena naloga | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/promena-naloga">
<meta property="og:description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta property="og:type" content="article">
<meta property="og:image" content="">
<?php include_once("assets/include/meta-search-engines.inc.php") ?>
    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  

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


<?php
try {
if(isset($_SESSION['logged'])){
	?>
<div class="container" style="padding-top: 60px;">
  <h2 class="page-header">Promeni profil</h2>
  <div class="row">
    <!-- left column -->
    <?php
	try {
	$sql = '
	select  * from users where user_id = :user_id 
	';
	$query = $db -> prepare ( $sql );
	$query -> execute ( array (
	
	':user_id' => $_SESSION['user_id']
	));
$row = $query -> fetch ( PDO::FETCH_ASSOC);
	$profile_image = $row['user_image'];	
	$username = $row['username'];	
	}
	catch ( PDOException $exception ){
	echo $exception -> getMessage();
	}
	
	
	?>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="/assets/images/user-images/<?php echo $username; ?>/<?php echo $profile_image;?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Promenite profilnu sliku...</h6>
        
        <form action="" method="post">
        <input type="file" class="text-center center-block well well-sm" name="profile_image">
        <input type="submit" name="submit" value="Promeni" class="btn btn-primary">
        </form>
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <h3>Moji podaci</h3>
        <form class="form-horizontal" role="form" method="post">
        <?php
		try {
		
		$sql = 'select * from users where user_id = :user_id  limit 1 ';
		$query = $db -> prepare ( $sql );
		$query -> execute (array (
		
		':user_id' => $_SESSION['user_id']
		));
		$retrived_resault = $query -> fetch ( PDO::FETCH_ASSOC);
	
		}
		



		
		catch ( PDOException $exception ){
		echo $exception -> getMessage();
		die();	
		}
		try {
			
			
	if(isset($_POST['change_account'])){
	$errors = array();
	$username = (isset($_POST['username'])) ? $_POST['username'] : '';
	$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
	$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : '';
	$state = (isset($_POST['state'])) ? $_POST['state'] : '';
	$city = (isset($_POST['city'])) ? $_POST['city'] : '';
	$address = (isset($_POST['address'])) ? $_POST['address'] : '';
	$postal_code = (isset($_POST['postal_code'])) ? $_POST['postal_code'] : '';
	$home_phone = (isset($_POST['home_phone'])) ? $_POST['home_phone'] : '';
	$mobile_phone = (isset($_POST['mobile_phone'])) ? $_POST['mobile_phone'] : '';


	if(empty ($first_name)){
	$errors[] = 'Ime ne može da bude prazno.';	
	}
	if(empty ($last_name)){
	$errors[] = 'Przime ne može da bude prazno.';	
	}
	if(empty ($state)){
	$errors[] = 'Država ne može da bude prazna.';	
	}
	if(empty ($city)){
	$errors[] = 'Grad ne može da bude prazan.';	
	}
	if(empty ($address)){
	$errors[] = 'Adresa ne može da bude prazna.';	
	}
	if(empty ($postal_code)){
	$errors[] = 'Poštanski broj ne može da bude prazan.';	
	}
	if(empty ($home_phone)){
	$errors[] = 'Kučni telefon ne može da bude prazan.';	
	}
	if(empty ($mobile_phone)){
	$errors[] = 'Mobilni telefon ne može da bude prazan.';	
	}
	if(count($errors) > 0 ) {
					  foreach ($errors as $error ){
						?>
                      <div class="alert alert-danger" role="alert"><?php echo $error;?></div> 
                        <?php  
					  }
		
		
	}
	else
	{
		
		$sql = 'update users set first_name = :first_name , last_name = :last_name, state = :state , city = :city , address = :address , 
		postal_code = :postal_code , home_phone = :home_phone , mobile_phone = :mobile_phone where user_id = :user_id  ';
		$query = $db -> prepare ( $sql );
		$query -> execute ( array (
		':first_name' => $first_name , 
		':last_name' => $last_name , 
		':state' => $state , 
		':city' => $city , 
		':address' => $address , 
		':postal_code' => $postal_code , 
		':home_phone' => $home_phone ,
		':mobile_phone' => $mobile_phone , 
		':user_id' => $_SESSION['user_id']
		));
                   ?>
                      <div class="alert alert-success" role="alert">Vaš nalog je uspešno promenjen.</div>
		<?php
		header('Refresh:2;URL=/promena-naloga');
	}

}

			
		}
		catch ( PDOException $exception ){
		echo $exception -> getMessage();
		die();	
		}

		?>
              

        <div class="form-group">
          <label class="col-md-3 control-label">Korisničko ime:</label>
          <div class="col-md-8">
            <input class="form-control"  type="text" name="username" disabled value="<?php echo $retrived_resault['username'];?>">
          </div>
        </div>

<div class="form-group">
          <label class="col-lg-3 control-label">Ime:</label>
          <div class="col-lg-8">
            <input class="form-control"  type="text" name="first_name" value="<?php echo $retrived_resault['first_name'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Prezime:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="last_name" value="<?php echo $retrived_resault['last_name'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Država:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="state" value="<?php echo $retrived_resault['state'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Grad:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="city" value="<?php echo $retrived_resault['city'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Adresa:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="address" value="<?php echo $retrived_resault['address'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Poštanski broj:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="postal_code" value="<?php echo $retrived_resault['postal_code'];?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Kučni telefon:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="home_phone" value="<?php echo $retrived_resault['home_phone'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Moibilni telefon:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="mobile_phone" value="<?php echo $retrived_resault['mobile_phone'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
          <input type="submit"class="btn btn-primary" value="Snimi promene" name="change_account" > 
            <span></span>
            <input class="btn btn-default" value="Otkaži" type="reset" onclick="javascript:history.go(-1);">
          </div>
        </div>
      </form>
    </div>

  </div>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">


    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <br>
      <hr>
      <br>
      <h3>Promena email adrese</h3>
        <form class="form-horizontal" role="form" method="post" action="">
              <?php
			  try {
			  
			  
			  if(isset($_POST['change_email'])){
				   $email = (isset($_POST['email'])) ? $_POST['email'] :'';
				   $repeat_email = (isset($_POST['repeat_email'])) ? $_POST['repeat_email'] :'';
				  
				  $errors = array ();
				  if(empty($email)){
					$errors[] = 'Unesite novu email adresu';  
				  }
				  if(empty($repeat_email)){
					$errors[] = 'Ponovite novu email adresu';  
				  }
				  if($email != $repeat_email ){
					$errors[] = 'Niste lepo ponovili novu email adresu';   
				  }
				  
				  
				  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					  $errors[] = "Nepostojeća email adresa"; 
}



			$sql = 'select * from users where email = :email ';
					  $query = $db -> prepare ( $sql );
					  $query -> execute ( array (':email' => $email));
					  
					  $rows = $query -> rowCount();
					  if($rows  > 0 ){
						$errors[] ='Email adresa je već registrovana'; 
					  }
				  if(count($errors ) > 0 ){
					  foreach ($errors as $error ){
						?>
                      <div class="alert alert-danger" role="alert"><?php echo $error;?></div> 
                        <?php  
					  }
				 }
				  else
				  {
					  
					 
						  
											 $sql = '
					 update users set email = :email where user_id = :user_id
					 ';
					 $query = $db -> prepare ($sql );
					 $query -> execute (array (
					 ':email' => $email , 
					 ':user_id' => $_SESSION['user_id']
					 
					 )); 
					  ?>
                      <div class="alert alert-success" role="alert">Vaša email adresa je uspšno promenjena.</div>
                      
                      <?php
					  
  
						  
						  
					
					  
					  
					  
					  
					  
				  }
				  
				  
				  
			  }// kaj main isseta
			  
			  
			  
			  }
			  catch ( PDOException $exception ){
				echo $exception -> getMessage();  
			  }
			  ?>

     
  <div class="form-group">
          <label class="col-md-3 control-label">Email adresa:</label>
          <div class="col-md-8">
            <input class="form-control"  type="email" name="email" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Ponovite email adresu:</label>
          <div class="col-md-8">
            <input class="form-control"  type="email" name="repeat_email" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Promeni email adresu" name="change_email" type="submit">
            <span></span>
            <input class="btn btn-default" value="Otkaži" type="reset" onclick="javascript:history.go(-1);">
          </div>
        </div>
      </form>
    </div>

  </div>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">


    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <h3>Promena šifre</h3>
        <form class="form-horizontal" role="form" action="" method="post" >
<?php

try {

if(isset($_POST['change_password'])){
	$password = (isset($_POST['password'])) ? $_POST['password'] : '';
	$repeat_password = (isset($_POST['repeat_password'])) ? $_POST['repeat_password'] : '';
	$errors = array ();
				  if(empty($password)){
					$errors[] = 'Unesite novu šifru';  
				  }
				  if(empty($repeat_password)){
					$errors[] = 'Ponovite novu šifru';  
				  }
				  if($password != $repeat_password ){
					$errors[] = 'Niste lepo ponovili novu šifru';   
				  }
				  

					  if(count($errors ) > 0 ){
					?>  
					<?php
					  foreach ($errors as $error ){
						?>
                        
                      <div class="alert alert-danger" role="alert"><?php echo $error;?></div> 
 <?php  
					  }
					  
					  
					  ?>
					  <?php
				  }
				  else
				  {
					  
	$options = [
	'cost' => 12 
	];
	$hashed_password = password_hash( $password , PASSWORD_DEFAULT , $options );
			  
					  
$sql = 'update users set password = :password where user_id = :user_id limit 1 ';

$query = $db -> prepare ( $sql );
$query -> execute ( array (
':password' => $hashed_password , 
':user_id' => $_SESSION['user_id']

));
?>
<div class="alert alert-success" role="alert">Vaša email adresa je uspšno promenjena.</div>
<?php

				  }
	
	
	
}





}
catch ( PDOException $exception ){
echo $exception -> getMessage();	
}

?>
     
  <div class="form-group">
          <label class="col-md-3 control-label">Šifra:</label>
          <div class="col-md-8">
            <input class="form-control"  type="password" name="password" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Ponovite šifru:</label>
          <div class="col-md-8">
            <input class="form-control"  type="password" name="repeat_password" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Promeni šifru" name="change_password" type="submit">
            <span></span>
            <input class="btn btn-default" value="Otkaži" type="reset" onclick="javascript:history.go(-1);">
          </div>
        </div>
      </form>
    </div>

  </div>










</div>
<?php	
}
else
{
?>	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
            <h1>Promena naloga</h1>
        <br><br>
        <h4>Morate da se prijavite da vi ste videli ovu stranu.</h4>
        <br><br>
        <a href="/prijavljivanje" class="btn btn-primary">Prijavi se</a>&nbsp;<a href="/registracija" class="btn btn-success">Registracija</a>&nbsp;<a href="/resetovanje-šifre" class="btn btn-default">Zaboravljena šifra</a>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
			</div>
		</div>
	</div>
<?php	
}

	
}
catch ( PDOException $exception ){
echo $exception -> getMessage();	
}

?>






<?php include_once("assets/include/footer.inc.php") ?>

<?php include_once("assets/include/jqueryscript.inc.php") ?>

<?php include_once("assets/include/ajax-live-search-script.php") ?>

<script type="text/javascript" src="/assets/js/list-grid-script-view-add-page.js"></script>

<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>