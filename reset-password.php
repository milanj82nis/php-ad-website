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

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Resetovanje šifre | Besplatni mali oglasi</title>
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
<meta property="og:title" content="Resetovanje šifre | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/resetovanje-šifre">
<meta property="og:description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta property="og:type" content="article">
<meta property="og:image" content="">
<meta name="yandex-verification" content="979ce198d42c67d6" />
<meta name="msvalidate.01" content="C0E25760FC6CC832E397A33A71371412" />
<meta name="google-site-verification" content="MMH3o98wsrZdlOwNL13q2RbRk1qUn8hMR36_9LuY0pM" />
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
            <form class="form-horizontal" role="form"  method="post" action="/prijavljivanje" >
                <h2>Resetovanje šifre</h2>


                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email adresa</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Email adresa" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Resetuj šifru</button>
                    </div>
                </div>
            </form> <!-- /form -->



</div>

</div><!-- col-md-9 -->
<div class="col-md-4">
<?php include_once("assets/include/sidebar-2.inc.php") ?>

</div><!-- col-md-4 -->


        </div> <!-- ./container -->




<?php include_once("assets/include/footer.inc.php") ?>

<?php include_once("assets/include/jqueryscript.inc.php") ?>

<?php include_once("assets/include/ajax-live-search-script.php") ?>

<script type="text/javascript" src="/assets/js/list-grid-script-view-add-page.js"></script>

<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>