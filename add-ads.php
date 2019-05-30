<?php require_once 'assets/include/config.inc.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Dodaj oglas | Besplatni mali oglasi</title>
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
<meta property="og:title" content="Dodaj oglas | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/dodaj-oglas">
<meta property="og:description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta property="og:type" content="article">
<meta property="og:image" content="">
<?php include_once("assets/include/meta-search-engines.inc.php") ?>
  <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
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

<?php
try {
	
if(isset($_SESSION['logged'])){
	?>
	
	<div class="container" >
<div class="row">
<div class="col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title"><br>&nbsp;&nbsp;&nbsp;Dodavanje malog oglasa<br><br></h2>
    </div>
    <div class="panel-body">
      <form name="basicform" id="basicform" method="post" action="" enctype="multipart/form-data">
        <?php
try {
	
if(isset($_POST['submit_ads'])){
$category_id = (isset($_POST['category_name'])) ? $_POST['category_name'] : '' ;

	
$duration_id = (isset($_POST['duration_id'])) ? $_POST['duration_id'] : '' ;	
$payment_id = (isset($_POST['payment_id'])) ? $_POST['payment_id'] : '' ;	
$shipping_id = (isset($_POST['shipping_id'])) ? $_POST['shipping_id'] : '' ;	
$status_id = (isset($_POST['status_id'])) ? $_POST['status_id'] : '' ;	






$ads_curency = (isset($_POST['ads_curency'])) ? $_POST['ads_curency'] : '' ;	
$ads_name = (isset($_POST['ads_name'])) ? $_POST['ads_name'] : '' ;	
$ads_description = (isset($_POST['ads_description'])) ? $_POST['ads_description'] : '' ;	
$ads_slug = (isset($_POST['ads_slug'])) ? $_POST['ads_slug'] : '' ;	
$created = date('Y-m-d H:i:s');
$updated = date('Y-m-d H:i:s');
$ads_price = (isset($_POST['ads_price'])) ? $_POST['ads_price'] : '' ;	
$ads_image_1 = basename( $_FILES["ads_image_1"]["name"]);
$ads_image_2 = basename( $_FILES["ads_image_2"]["name"]);
$ads_image_3 = basename( $_FILES["ads_image_3"]["name"]);
$ads_image_4 = basename( $_FILES["ads_image_4"]["name"]);
$ads_image_5 = basename( $_FILES["ads_image_5"]["name"]);
$ads_image_6 = basename( $_FILES["ads_image_6"]["name"]);
$ads_image_7 = basename( $_FILES["ads_image_7"]["name"]);
$ads_image_8 = basename( $_FILES["ads_image_8"]["name"]);
$ads_image_9 = basename( $_FILES["ads_image_9"]["name"]);
$ads_image_10 = basename( $_FILES["ads_image_10"]["name"]);
$username= $_SESSION['username'];
$user_id= $_SESSION['user_id'];

$video_url = (isset($_POST['video_url'])) ? $_POST['video_url'] : '' ;	

$allowed =  array('gif','png' ,'jpg' , 'tif');

$target_dir1 = "assets/images/product-images/$username/";
$target_dir1 = $target_dir1 . basename( $_FILES["ads_image_1"]["name"]);

$target_dir2 = "assets/images/product-images/$username/";
$target_dir2 = $target_dir2 . basename( $_FILES["ads_image_2"]["name"]);

$target_dir3 = "assets/images/product-images/$username/";
$target_dir3 = $target_dir3 . basename( $_FILES["ads_image_3"]["name"]);

$target_dir4 = "assets/images/product-images/$username/";
$target_dir4 = $target_dir4 . basename( $_FILES["ads_image_4"]["name"]);

$target_dir5 = "assets/images/product-images/$username/";
$target_dir5 = $target_dir5 . basename( $_FILES["ads_image_5"]["name"]);

$target_dir6 = "assets/images/product-images/$username/";
$target_dir6 = $target_dir6 . basename( $_FILES["ads_image_6"]["name"]);

$target_dir7 = "assets/images/product-images/$username/";
$target_dir7 = $target_dir7 . basename( $_FILES["ads_image_7"]["name"]);

$target_dir8 = "assets/images/product-images/$username/";
$target_dir8 = $target_dir8 . basename( $_FILES["ads_image_8"]["name"]);

$target_dir9 = "assets/images/product-images/$username/";
$target_dir9 = $target_dir9 . basename( $_FILES["ads_image_9"]["name"]);

$target_dir10 = "assets/images/product-images/$username/";
$target_dir10 = $target_dir10 . basename( $_FILES["ads_image_10"]["name"]);

$errors = array();
if(empty($ads_name)){
	$errors[] = 'Naslov oglasa ne može da bude prazan.';	
}
if(empty($ads_description)){
	$errors[] = 'Opis oglasa ne može da bude prazan.';	
}


$allowed1 =  array('gif','png' ,'jpg','jpeg' , 'JPG','JPEG' );
$ext1 = pathinfo($ads_image_1, PATHINFO_EXTENSION);
if(!in_array($ext1,$allowed1) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 1 ).';	
}


$allowed2 =  array('gif','png' ,'jpg','jpeg'  ,'JPG','JPEG');
$ext2 = pathinfo($ads_image_2, PATHINFO_EXTENSION);
if(!in_array($ext2,$allowed2) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 2 ).';	
}

$allowed3 =  array('gif','png' ,'jpg','jpeg'  ,'JPG','JPEG');
$ext3 = pathinfo( $ads_image_3, PATHINFO_EXTENSION);
if(!in_array($ext3,$allowed3) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 3 ).';	
}
$allowed4 =  array('gif','png' ,'jpg','jpeg' , 'JPG','JPEG' );
$ext4 = pathinfo($ads_image_4, PATHINFO_EXTENSION);
if(!in_array($ext4,$allowed4) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 4 ).';	
}


$allowed5 =  array('gif','png' ,'jpg','jpeg'  ,'JPG','JPEG');
$ext5 = pathinfo($ads_image_5, PATHINFO_EXTENSION);
if(!in_array($ext5,$allowed5) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 5 ).';	
}

$allowed6 =  array('gif','png' ,'jpg','jpeg'  ,'JPG','JPEG');
$ext6 = pathinfo( $ads_image_6, PATHINFO_EXTENSION);
if(!in_array($ext6,$allowed6) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 6 ).';	
}


$allowed7 =  array('gif','png' ,'jpg','jpeg' , 'JPG','JPEG' );
$ext7 = pathinfo($ads_image_7, PATHINFO_EXTENSION);
if(!in_array($ext7,$allowed7) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 7 ).';	
}


$allowed8 =  array('gif','png' ,'jpg','jpeg'  ,'JPG','JPEG');
$ext9 = pathinfo($ads_image_8, PATHINFO_EXTENSION);
if(!in_array($ext9,$allowed8) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 8 ).';	
}

$allowed9 =  array('gif','png' ,'jpg','jpeg'  ,'JPG','JPEG');
$ext9 = pathinfo( $ads_image_9, PATHINFO_EXTENSION);
if(!in_array($ext9,$allowed9) ) {
 $errors[] = 'Pogrešan tip fajla za upload ( Slika broj 9 ).';	
}

$allowed10 =  array('gif','png' ,'jpg','jpeg' , 'JPG','JPEG' );
$ext10 = pathinfo($ads_image_10, PATHINFO_EXTENSION);
if(!in_array($ext10,$allowed10) ) {
$errors[] = 'Pogrešan tip fajla za upload ( Slika broj 10 ).';	
}





if(count($errors ) > 0 ){
    foreach ( $errors as $error ){
	?>
    <div class="alert alert-danger">
  <strong>Greška!</strong> <?php echo $error;?>
</div>
    <?php	
	}

}
else
{
	if (move_uploaded_file($_FILES['ads_image_1']['tmp_name'], $target_dir1 ) && 
	
		move_uploaded_file($_FILES['ads_image_2']['tmp_name'], $target_dir2 ) && 
		
		move_uploaded_file($_FILES['ads_image_3']['tmp_name'], $target_dir3 ) && 
		
		move_uploaded_file($_FILES['ads_image_4']['tmp_name'], $target_dir4 ) && 
		
		move_uploaded_file($_FILES['ads_image_5']['tmp_name'], $target_dir5 ) && 
		
		move_uploaded_file($_FILES['ads_image_6']['tmp_name'], $target_dir6 ) && 
		
		move_uploaded_file($_FILES['ads_image_7']['tmp_name'], $target_dir7 ) && 
		
		move_uploaded_file($_FILES['ads_image_8']['tmp_name'], $target_dir8 ) && 
		
		move_uploaded_file($_FILES['ads_image_9']['tmp_name'], $target_dir9 ) && 
		
		move_uploaded_file($_FILES['ads_image_10']['tmp_name'], $target_dir10 ) 
		)
	 
	 {
		 
		 $ads_slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $ads_name );
		 $ads_slug = strtolower($ads_slug);

$sql = '
insert into ads ( 
ads_id , user_id, category_id , ads_name , ads_description , ads_slug , created ,updated  ,ads_image_1  ,ads_image_2  , ads_image_3, ads_image_4 , ads_image_5 , ads_image_6, ads_image_7 ,ads_image_8 , ads_image_9 ,ads_image_10 , ads_price , ads_curency , shipping_id , payment_id , status_id , duration_id  , video_url ) 

values (
null ,  :user_id, :category_id , :ads_name , :ads_description , :ads_slug , :created , :updated  , :ads_image_1  , :ads_image_2  , :ads_image_3,    :ads_image_4 , :ads_image_5 , :ads_image_6, :ads_image_7 , :ads_image_8 , :ads_image_9 , :ads_image_10 , :ads_price , :ads_curency , :shipping_id , :payment_id , :status_id , :duration_id , :video_url

)
';
$query = $db -> prepare ( $sql );
$query -> execute ( array (

':user_id' => $user_id, 
':category_id' => $category_id , 
':ads_name'  => $ads_name, 
':ads_description' =>$ads_description , 
':ads_slug' => $ads_slug , 
':created'  => $created, 
':updated'  => $updated , 
':ads_image_1' => $ads_image_1  ,
':ads_image_2'   => $ads_image_2,
':ads_image_3' => $ads_image_3, 
':ads_image_4'  => $ads_image_4, 
':ads_image_5' => $ads_image_5 , 
':ads_image_6' => $ads_image_6, 
':ads_image_7'  => $ads_image_7,
':ads_image_8'  => $ads_image_8, 
':ads_image_9' => $ads_image_9 , 
':ads_image_10'  => $ads_image_10, 
':ads_price' => $ads_price , 
':ads_curency' => $ads_curency ,
':shipping_id' => $shipping_id , 
':payment_id' => $payment_id , 
':status_id' => $status_id , 
':duration_id' => $duration_id  , 
':video_url' => $video_url 

));

echo '<h2>Uspešno ste dodali vaš oglas</h2>';
header('Refresh:5;URL:/dodavanje-oglasa');
die();
	
	
	
	
}
else
{
	
	
}

	}
	

	
}// kraj main iseta
}
catch ( PDOException $exception ){
echo $exception -> getMessage();
die();	
}



?>
        <div id="sf1" class="frm">
          <fieldset>
            <legend>Koriak 1 od 3 - Kategorija oglasa</legend>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Izaberite kategoriju oglasa </label>
              <div class="col-lg-8">
                <select name="category_name"  class="form-control" >

                <?php
				try {
				$sql = '
				select * from categories order by category_name asc
				
				
				';
				$query = $db -> prepare ( $sql );
				$query -> execute ( array (
				
				
				));	
				while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>
				     <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
	
                    <?php
				}// kraj while 
					
				}
				catch ( PDOException $exception ){
				echo $exception -> getMessage();	
				}
				
				
				?>
                
                
                </select>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_curency">Trajanje oglasa: </label>
              <div class="col-lg-10">
                <select name="duration_id"   class="form-control" >

                <?php
				try {
				$sql = '
				select * from ads_duration order by duration_name asc
				
				
				';
				$query = $db -> prepare ( $sql );
				$query -> execute ( array (
				
				
				));	
				while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>
				     <option value="<?php echo $row['id'];?>"><?php echo $row['duration_name'];?></option>
	
                    <?php
				}// kraj while 
					
				}
				catch ( PDOException $exception ){
				echo $exception -> getMessage();	
				}
				
				
				?>
                
                
                </select>
              </div>
            </div>


            <div class="clearfix" style="height: 10px;clear: both;"></div>

			<div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_curency">Način plaćanje </label>
              <div class="col-lg-10">
                <select name="payment_id"   class="form-control" >

                <?php
				try {
				$sql = '
				select * from ads_payement order by payement_name asc
				
				
				';
				$query = $db -> prepare ( $sql );
				$query -> execute ( array (
				
				
				));	
				while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>
				     <option value="<?php echo $row['id'];?>"><?php echo $row['payement_name'];?></option>
	
                    <?php
				}// kraj while 
					
				}
				catch ( PDOException $exception ){
				echo $exception -> getMessage();	
				}
				
				
				?>
                
                
                </select>
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_curency">Način slanja </label>
              <div class="col-lg-10">
                <select name="shipping_id"   class="form-control" >

                <?php
				try {
				$sql = '
				select * from ads_shipping order by shipping_name asc
				
				
				';
				$query = $db -> prepare ( $sql );
				$query -> execute ( array (
				
				
				));	
				while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>
				     <option value="<?php echo $row['id'];?>"><?php echo $row['shipping_name'];?></option>
	
                    <?php
				}// kraj while 
					
				}
				catch ( PDOException $exception ){
				echo $exception -> getMessage();	
				}
				
				
				?>
                
                
                </select>
              </div>
            </div>

			 <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_curency">Stanje predmeta </label>
              <div class="col-lg-10">
                <select name="status_id"   class="form-control" >

                <?php
				try {
				$sql = '
				select * from ads_status order by status_name asc
				
				
				';
				$query = $db -> prepare ( $sql );
				$query -> execute ( array (
				
				
				));	
				while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>
				     <option value="<?php echo $row['status_id'];?>"><?php echo $row['status_name'];?></option>
	
                    <?php
				}// kraj while 
					
				}
				catch ( PDOException $exception ){
				echo $exception -> getMessage();	
				}
				
				
				?>
                
                
                </select>
              </div>
            </div>
            
            <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>





            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-primary open1" type="button">Sledeći korak <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf2" class="frm" style="display: none;">
          <fieldset>
            <legend>Korak 2 od 3 - Detalji oglasa</legend>


            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_name">Naslov oglasa: </label>
              <div class="col-lg-10">
                <input type="text" placeholder="Naslov oglasa" id="uemail" name="ads_name" class="form-control" >
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_description">Opis oglasa: </label>
              <div class="col-lg-10">
                <textarea cols="60" rows="10" name="ads_description" id="uemail"  class="form-control" >Unesite opis oglasa</textarea>
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_curency">Valuta cene oglasa: </label>
              <div class="col-lg-10">
                <select name="ads_curency"   class="form-control" >

                <?php
				try {
				$sql = '
				select * from ads_curency order by curency_name asc
				
				
				';
				$query = $db -> prepare ( $sql );
				$query -> execute ( array (
				
				
				));	
				while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>
				     <option value="<?php echo $row['curency_id'];?>"><?php echo $row['curency_name'];?></option>
	
                    <?php
				}// kraj while 
					
				}
				catch ( PDOException $exception ){
				echo $exception -> getMessage();	
				}
				
				
				?>
                
                
                </select>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_price">Cena oglasa: </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Cena oglasa"  name="ads_price" id="uemail" class="form-control" >
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_price">Youtube url: </label>
              <div class="col-lg-10">
                <input type="text" placeholder="Youtube klip "  name="video_url" id="uemail" class="form-control" >
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>



  

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"></span> Nazad</button> 
                <button class="btn btn-primary open2" type="button">Sledeći korak <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>


          </fieldset>
        </div>
        
        
        <div id="sf3" class="frm" style="display: none;">
          <fieldset>
            <legend>Korak 3 od 3 - Dodavanje slika</legend>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_1">Slika 1: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_1"   >
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_2">Slika 3: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_2"   >
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_3">Slika 3: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_3"   >
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_4">Slika 4: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_4"   >
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_5">Slika 5: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_5"  >
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_6">Slika 6: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_6"  >
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>


            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_7">Slika 7: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_7"   >
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_8">Slika 8: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_8"   >
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_9">Slika 9: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_9"   >
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="ads_image_10">Slika 10: </label>
              <div class="col-lg-6">
              <input type="file" name="ads_image_10"  >
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group">
            <div class="col-md-12" style="color:red;">
            
            <hr>
            <h2>VAŽNA NAPOMENA</h2><br>
            
            <h4>Da bi ste uspešno dodali oglas sva polja u ovoj formi moraju da budu popunjena i 
            sve 10 slike moraju da budu dodate , u suprotom neće vam biti objavljen oglas.
            <br><br>
            Ako kojim slučajem nemate 10 slika onda dodajte jednu sliku nekoliko puta da bi vam oglas prošao.
                        <br><br>
Svi oglasi će biti naknadno pregledani , i ako se ne pridržavaju uslovima korišćenja sajta , biće izmenjeni ili trajno obrisani.

<br><br>
Klikom na dugme objavi oglas , automatski prihvatate uslove korišćenja sajta.
<br>
</h4><br>
<a href="/uslovi-korišćenja" target="new" >Uslovi korišćenja sajta</a>&nbsp;&nbsp;&nbsp;<a href="/politika-privatnosti" target="new">Politika privatnosti</a>
        <br><br><br>    
            </div>
            </div><!-- form_group -->





            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Nazad</button> 
                <input type="submit" name="submit_ads" value="Objavi oglas" class="btn btn-primary open3" >

              </div>
            </div>

          </fieldset>
        </div>
      </form>
    </div>
  </div>

</div><!-- col-md-9 -->
<div class="col-md-4">


<?php include_once("assets/include/sidebar-2.inc.php") ?>



</div><!--  sidebar -->
</div>

</div>

	<?php
	
}
else
{
	
	
	?>
    <div class="container">
    <div class="col-md-8">
    
    	    <br><br><br>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;Morate da se prijavite da bi ste dodali oglas</h2>
    <br><br><br><br><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/prijavljivanje" class="btn btn-primary">Prijavi se</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/registracija" class="btn btn-default">Registracija korisnika</a>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
        <br><br><br><br><br><br>
    <br><br><br><br><br><br>

    </div><!-- col-md-8 -->
<div class="col-md-4">


<?php include_once("assets/include/sidebar-2.inc.php") ?>



</div><!--  sidebar -->
    
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
<script type="text/javascript" src="/assets/js/jquery.validate.js"></script>
<script type="text/javascript">
  
  jQuery().ready(function() {

    // validate form on keyup and submit
    var v = jQuery("#basicform").validate({
      rules: {
        uname: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        uemail: {
          required: true,
          minlength: 2,
          email: true,
          maxlength: 100,
        },
        upass1: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },
        upass2: {
          required: true,
          minlength: 6,
          equalTo: "#upass1",
        }

      },
      errorElement: "span",
      errorClass: "help-inline-error",
    });

    $(".open1").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf2").show("slow");
      }
    });

    $(".open2").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf3").show("slow");
      }
    });
    
  /*  $(".open3").click(function() {
      if (v.form()) {
        $("#loader").show();
         setTimeout(function(){
           $("#basicform").html('<h2>Thanks for your time.</h2>');
         }, 1000);
        return false;
      }
    });
    */
    $(".back2").click(function() {
      $(".frm").hide("fast");
      $("#sf1").show("slow");
    });

    $(".back3").click(function() {
      $(".frm").hide("fast");
      $("#sf2").show("slow");
    });

  });
</script>

<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>