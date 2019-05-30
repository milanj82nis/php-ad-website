<?php require_once 'assets/include/config.inc.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Moji oglasi | Besplatni mali oglasi</title>
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
<meta property="og:title" content="Moji oglasi | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/moji-oglasi">
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
 <script language="JavaScript" type="text/javascript">
function delads(id, title)
{
  if (confirm("Dali ste sigurni da želite da obrišete oglas:  '" + title + "'"))
  {
      window.location.href = 'my-ads.php?delads=' + id;
  }
}
</script>

  </head>
  <body>
<?php include_once("assets/include/analyticstracking.php") ?>

<?php include_once("assets/include/facebook_sdk.php") ?>


<?php include_once("assets/include/header.inc.php") ?>

<?php include_once("assets/include/nav.inc.php") ?>

<?php include_once("assets/include/show-instant-search-resault.inc.php") ?>

     

      
      <div class="container">
      <h2>Moji oglasi</h2>
      <br>
         <div class="row">
           
            <div class="col-sm-12">
              
              
             <!--begin tabs going in narrow content -->
               <ul class="nav nav-tabs sidebar-tabs" id="sidebar" role="tablist">
                  <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Svi oglasi</a></li>
                  <li><a href="#tab-2" role="tab" data-toggle="tab">Aktivni oglasi</a></li>
                  <li><a href="#tab-3" role="tab" data-toggle="tab">Istekli oglasi</a></li>
               </ul><!--/.nav-tabs.sidebar-tabs -->
               <!-- Tab panes -->
               <div class="tab-content">
                  <div class="tab-pane active" id="tab-1">
                                          
                     <?php
                     try {
	if(isset($_GET['delads'])){ 

    $stmt = $db->prepare('DELETE FROM ads WHERE ads_id = :ads_id') ;
    $stmt->execute(array(':ads_id' => $_GET['delads']));

    header('Location: my-ads.php?action=deleted');
    exit;
} 
if(isset($_GET['action'])){ 
    echo '<h3>Oglas je obrisan.</h3>'; 
}

						
						
						
						$sql = '
									select * from ads a left join categories c 
									on a.category_id = c.category_id 
									left join users u 
									on a.user_id = u.user_id 
									where a.user_id = :user_id
						';
						$query = $db -> prepare ( $sql );
						$query -> execute (array(
						
						':user_id' => (int)$_SESSION['user_id']
						));
						$resaults = $query -> rowCount();
						if($resaults > 0 ){
												while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>	
						<div class="row">
                   <div class="col-md-2"><img src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1']; ?>" width="100%" alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"></div>
                        <div class="col-md-5"><a href="/oglas/<?php echo $row['ads_id'];?>"><?php echo $row['ads_name'];?></a></div>
                        <div class="col-md-5 ">
                        
                        <a href="/promeni-oglas/<?php echo $row['ads_id'];?>" class="btn btn-primary">Promeni oglas</a>
                        <a href="javascript:delads('<?php echo $row['ads_id'];?>','<?php echo $row['ads_name'];?>')" class="btn btn-danger">Obriši oglas</a>
                        
                        
                        </div>
                        <hr>
                        </div>
					<?php	
					}

						
						}
						else
						{
							?>
                            <div class="row">
                            <div class="col-md-12">
                            <h4>Nemate objavljen ni jedan oglas</h4>
                            <br>
                            <a href="/dodaj-oglas" class="btn btn-primary btn-lg btn-block">Dodaj oglas</a>
                            </div><!-- col-md-12 -->
                            </div>
                            <?php
							
							
						}
						
						
						
						
						
						
						
						
						
						
						 
						 
					 }
					 catch ( PDOException $exception ){
						echo $exception -> getMessage();
					 }
                     
                     
                     ?>
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane" id="tab-2">
                     
                                          <?php
                     try {
						 
						
						
						
						$sql = '
									select * from ads a left join categories c 
									on a.category_id = c.category_id 
									left join users u 
									on a.user_id = u.user_id 
									where a.user_id = :user_id and active = :activated 
						';
						$query = $db -> prepare ( $sql );
						$query -> execute (array(
						
						':user_id' => (int)$_SESSION['user_id'],
						':activated' => 1
						));
						$resaults = $query -> rowCount();
						if($resaults > 0 ){
												while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>	
						<div class="row">
                        <div class="col-md-2"><img src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1']; ?>" width="100%" alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"></div>
                        <div class="col-md-5"><a href="/oglas/<?php echo $row['ads_id'];?>"><?php echo $row['ads_name'];?></a></div>
                        <div class="col-md-5 ">
                        
                        <a href="/promeni-oglas/<?php echo $row['ads_id'];?>" class="btn btn-primary">Promeni oglas</a>
                        <a href="javascript:delads('<?php echo $row['ads_id'];?>','<?php echo $row['ads_name'];?>')" class="btn btn-danger">Obriši oglas</a>
                        
                        
                        </div>
                        <hr>
                        </div>
					<?php	
					}

						
						}
						else
						{
							?>
                            <div class="row">
                            <div class="col-md-12">
                            <h4>Nemate objavljen ni jedan oglas</h4>
                            <br>
                            <a href="/dodaj-oglas" class="btn btn-primary btn-lg btn-block">Dodaj oglas</a>
                            </div><!-- col-md-12 -->
                            </div>
                            <?php
							
							
						}
						
						
						
						
						
						
						
						
						
						
						 
						 
					 }
					 catch ( PDOException $exception ){
						echo $exception -> getMessage();
					 }
                     
                     
                     ?>
                  </div><!--/.tab-pane -->
                  <div class="tab-pane" id="tab-3">
                                              <?php
                     try {
						 
						
						
						
						$sql = '
									select * from ads a left join categories c 
									on a.category_id = c.category_id 
									left join users u 
									on a.user_id = u.user_id 
									where a.user_id = :user_id and active = :activated 
						';
						$query = $db -> prepare ( $sql );
						$query -> execute (array(
						
						':user_id' => (int)$_SESSION['user_id'],
						':activated' => 0
						));
						$resaults = $query -> rowCount();
						if($resaults > 0 ){
								while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
					?>	
						<div class="row">
                        <div class="col-md-2"><img src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1']; ?>" width="100%" alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"></div>
                        <div class="col-md-7"><a href="/oglas/<?php echo $row['ads_id'];?>"><?php echo $row['ads_name'];?></a></div>
                        <div class="col-md-3 ">
                        
                        
                        <a href="javascript:delads('<?php echo $row['ads_id'];?>','<?php echo $row['ads_name'];?>')" class="btn btn-danger">Obriši oglas</a>
                        
                        
                        </div>
                        <hr>
                        </div>
					<?php	
					}

						
						}
						else
						{
							?>
                            <div class="row">
                            <div class="col-md-12">
                            <h4>Nemate ni jedan neaktivan oglas</h4>
                            <br>
                            <a href="/dodaj-oglas" class="btn btn-primary btn-lg btn-block">Dodaj oglas</a>
                            </div><!-- col-md-12 -->
                            </div>
                            <?php
							
							
						}
						
						
						
						
						
						
						
						
						
						
						 
						 
					 }
					 catch ( PDOException $exception ){
						echo $exception -> getMessage();
					 }
                     
                     
                     ?>

                  </div><!--/.tab-pane -->
               </div><!--/.tab-content -->
              
            </div> <!--/.col-sm-4 -->

           
           

           
         </div><!--/.row -->
        <br><br>
      </div><!--/.container -->
    </div>
  <?php include_once("assets/include/footer.inc.php") ?>

<?php include_once("assets/include/jqueryscript.inc.php") ?>
 <?php include_once("assets/include/ajax-live-search-script.php") ?>
     <script type="text/javascript" src="/assets/js/tabs-view-add-page.js"> </script> 


<script type="text/javascript" src="/assets/js/list-grid-script-view-add-page.js"></script>
<script src="//raw.githubusercontent.com/flatlogic/bootstrap-tabcollapse/master/bootstrap-tabcollapse.js"></script>


<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>