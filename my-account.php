<?php require_once 'assets/include/config.inc.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Moj nalog | Besplatni mali oglasi</title>
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
<meta property="og:title" content="Moj nalog | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/moj-nalog">
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



<br>

<?php
try {
	
		
$sql = '
				
				select * from users u left join access_levels l 
				on u.access_lvl = l.access_lvl
				where user_id = :user_id 
				limit 1 
				
				';
				$query = $db->prepare($sql);
				$query->execute(array(':user_id' => (int)$_SESSION['user_id']));
				$main_row = $query->fetch();




?>
   





		<div class="container" >
          <?php
		try {
		
		$sql = 'select * from users where user_id = :user_id  limit 1 ';
		$query = $db -> prepare ( $sql );
		$query -> execute (array (
		
		':user_id' => (int)$_SESSION['user_id']
		));
		$retrived_resault = $query -> fetch ( PDO::FETCH_ASSOC);
	
		}
		



		
		catch ( PDOException $exception ){
		echo $exception -> getMessage();
		die();	
		}


		?>
<h1 class="page-header"><strong>Moj profil</strong></h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="/assets/images/user-images/<?php echo $retrived_resault['username'];?>/<?php echo $retrived_resault['user_image']; ?>" 
        class="avatar img-circle img-thumbnail" 
        alt="<?php echo $retrived_resault['first_name'];?> <?php echo $retrived_resault['last_name'];?>" 
        title="<?php echo $retrived_resault['first_name'];?> <?php echo $retrived_resault['last_name'];?>">

        

      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
        <form class="form-horizontal" role="form" method="post">
              

        <div class="form-group">
          <label class="col-md-3 control-label">Korisničko ime:</label>
          <div class="col-md-8">
            <input class="form-control"  type="text" name="username" disabled value="<?php echo $retrived_resault['username'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Email adresa:</label>
          <div class="col-md-8">
            <input class="form-control"  type="text" name="email" disabled value="<?php echo $retrived_resault['email'];?>">
          </div>
        </div>

<div class="form-group">
          <label class="col-lg-3 control-label">Ime:</label>
          <div class="col-lg-8">
            <input class="form-control"  type="text" name="first_name" disabled value="<?php echo $retrived_resault['first_name'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Prezime:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="last_name"  disabled value="<?php echo $retrived_resault['last_name'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Država:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="state"  disabled value="<?php echo $retrived_resault['state'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Grad:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="city"  disabled value="<?php echo $retrived_resault['city'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Adresa:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="address" disabled  value="<?php echo $retrived_resault['address'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Poštanski broj:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="postal_code" disabled  value="<?php echo $retrived_resault['postal_code'];?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Fiksni telefon:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="home_phone" disabled  value="<?php echo $retrived_resault['home_phone'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Mobilni telefon:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" name="mobile_phone" disabled  value="<?php echo $retrived_resault['mobile_phone'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
          <input type="button"class="btn btn-primary" value="Promeni nalog" name="change_account" onclick="document.location='/promena-naloga'" > 
            <span></span>
            <input class="btn btn-danger" value="Vrati se nazad" type="button" onclick="document.location='javascript:history.go(-1)'">
          </div>
        </div>
      </form>
    </div>

  </div>











</div>



<?php


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