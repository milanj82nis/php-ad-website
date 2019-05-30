<?php require_once 'assets/include/config.inc.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Pregled oglasa | Besplatni mali oglasi</title>
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
<meta name="country" content="Србија">
<meta property="og:title" content="Pregled oglasa | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/oglas/<?php echo $_GET['id'];?>">
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
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css" media="screen">
<?php include_once("assets/include/tinimce-script.inc.php") ?>


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
	<div class="row">
		<div class="col-md-12">

        <div class="col-md-8 pull-left">
        
        <h2>Pošaljite nam poruku</h2>
        <p class="lead">Imate pitanje ili želite detaljnije informacije o nekom oglasu?</p>
        
        <p>Popunite formu a mi ćemo vam odgovoriti u što kraćem roku</p> <br> 
         




              		              <div id="msgSubmit" class="h3 text-center hidden"></div> 

            <form role="form" id="contactForm" class="contact-form shake" data-toggle="validator" >
              <div class="form-group">
                <div class="controls">
                <label for="name">Ime i prezime *</label><br>
                  <input type="text" id="name" class="form-control" placeholder="Ime i prezime" required data-error="Unesite vaše ime i prezime">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                                  <label for="email">Email adresa *</label><br>
<input type="email" class="email form-control" id="email" placeholder="Email adresa" required data-error="Unesite vašu email adresu">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <label for="email">Predmet poruke *</label><br>
                  
                  <input type="text" id="msg_subject" class="form-control" placeholder="Predmet poruke" required data-error="Unesite predmet poruke">                                  

                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <label for="email">Poruka *</label><br>
<textarea id="message" rows="9"  class="form-control" required data-error="Unesite vašu poruku " placeholder="Poruka"></textarea>
                  <div class="help-block with-errors"></div>
                </div>  
              </div>
<p class="small">Sva polja označena zvezdicom ( * ) su obavezna za popunjavanje.</p>
<br>

              <button type="submit" id="submit" class="btn btn-success"></i> Pošalji poruku</button>
            <div class="clearfix"></div>   

            </form>     
            <!-- End Contact Form -->
<br><br><br>

</div><!-- col-md-9 -->
<div class="col-md-4 pull-right">
<div class="row">
<div class="col-md-12">
<div class="well well-sm">
<h3>Kontakt informacije</h3>
<ul  class="list-group">
<?php
try {
	
$sql = '
			select * from users where access_lvl > 0 order by username asc


';
$query = $db -> prepare ( $sql );
$query -> execute ();	
while ($row = $query -> fetch ( PDO::FETCH_ASSOC)){
	?>
    
  <li class="list-group-item"><strong>Ime  : </strong> <span class="badge"><?php echo $row['first_name'];?></span></li>
  <li class="list-group-item"><strong>Prezime  : </strong> <span class="badge"><?php echo $row['last_name'];?></span></li>
  <li class="list-group-item"><strong>Mobilni telefon  : </strong> <span class="badge"><?php echo $row['mobile_phone'];?></span></li>
<li class="list-group-item"><strong>Email : </strong> <span class="badge"><?php echo $row['email'];?></span></li>
<lI class="list-group-item"><strong>Država  : </strong> <span class="badge"><?php echo $row['state'];?></span></li>
<li class="list-group-item"><strong>Grad  : </strong> <span class="badge"><?php echo $row['city'];?></span></li>
<li class="list-group-item"><strong>Adresa  : </strong> <span class="badge"><?php echo $row['address'];?></span></li>
  
    
    <?php
}
	
}
catch ( PDOException $exception ){
echo $exception -> getMessage();	
}


?>






</ul>
</div>
</div>
</div>
<div class="row">
<?php include_once("assets/include/sidebar-2.inc.php") ?>
</div>
</div><!-- col-md-3 -->
<br><br><br>





        
        
        


        </div>
	</div>
</div>



<?php include_once("assets/include/footer.inc.php") ?>
<?php include_once("assets/include/jqueryscript.inc.php") ?>
<?php include_once("assets/include/ajax-live-search-script.php") ?>

<script type="text/javascript" src="/assets/js/list-grid-script-view-add-page.js"></script>
    <script type="text/javascript" src="/assets/js/form-validator.min.js"></script>  
    <script type="text/javascript" src="/assets/js/contact-form-script.js"></script>


<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>