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
	
$sql = "select * from ads a left join categories c 
	   on a.category_id = c.category_id 
	   left join users u 
	   on u.user_id = a.user_id 
	   left join ads_curency ac 
			on a.ads_curency = ac.curency_id
			
			left join ads_duration d
			on a.duration_id = d.id 
			
			left join ads_payement p 
			on a.payment_id = p.id 
			
			
			left join ads_shipping sh
			on a.shipping_id = sh.id
			
						
			left join ads_status st
			on a.status_id = st.status_id
			
			

			
	   where a.ads_id = :add_id limit 1 ";


$query = $db -> prepare ( $sql );
$query -> execute ( array(
':add_id' => $_GET['id']

));	
$row = $query->fetch(PDO::FETCH_ASSOC);


$view_ad = $row['views'];
$new_view = $view_ad + 1 ;


$sql = 'update ads set views = :new_view where ads_id = :ads_id  limit 1 ';
$query = $db -> prepare ($sql);
$query -> execute ( array (
':new_view' => $new_view , 
':ads_id' => $_GET['id']
));
if($row['ads_id'] == ''){
    header('Location:/početna-strana');
    exit;
}}
catch ( PDOException $exception ){
echo $exception -> getMessage();	
}


?>

<div class="container">
<div class="well well-sm">



<div class="row">
<div class="col-md-9">

<h2><?php echo $row['ads_name'];?></h2>
<br>
</div>
<div class="col-md-3">


</div>
</div><!-- row -->
<div class="row">
<div class="col-md-8">

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
            <?php
			if($row['ads_image_1'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1'];?>" 
                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
                />
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1'];?>"
                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
                
                 />
            </div>

                <?php
			}
			
			?>
                <?php
			if($row['ads_image_2'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_2'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_2'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
            </div>

                <?php
			}
			
			?>    <?php
			if($row['ads_image_3'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_3'];?>"                 alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_3'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
            </div>

                <?php
			}
			
			?>  
            
            
                <?php
			if($row['ads_image_4'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_4'];?>"                 alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_4'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
            </div>

                <?php
			}
			
			?>
             <?php
			if($row['ads_image_5'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_5'];?>"                 alt="<?php echo $row['add_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_5'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
            </div>

                <?php
			}
			
			?>
            <?php
			if($row['ads_image_6'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_6'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_6'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
            </div>

                <?php
			}
			
			?>
                <?php
			if($row['ads_image_7'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_7'];?>"                 alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_7'];?>"                alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
            </div>

                <?php
			}
			
			?>
                <?php
			if($row['ads_image_8'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_8'];?>"                 alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_8'];?>"                  alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"/>
            </div>

                <?php
			}
			
			?>
               
            <?php
			if($row['ads_image_9'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_9'];?>"                                 alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_9'];?>"                                 alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
 />
            </div>

                <?php
			}
			
			?>
            
                <?php
			if($row['ads_image_10'] != null ){
				?>
                
                            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_10'];?>"                                 alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
                <img data-u="thumb" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_10'];?>"                                  alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>"
/>
            </div>

                <?php
			}
			
			?>

        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>

    <!-- #endregion Jssor Slider End -->

</div><!-- col-md-8 -->
<div class="col-md-3 col-xs-offset-1">


<h3>Kontakt informacije</h3>
<ul  class="list-group">


<li class="list-group-item"><strong>Ime : </strong>  <span class="badge"><?php echo $row['first_name'];?></span></li>
<li class="list-group-item"><strong>Prezime : </strong>  <span class="badge"><?php echo $row['last_name'];?></span></li>

<li class="list-group-item"><strong>Fiksni telefon : </strong> <span class="badge"><?php echo $row['home_phone'];?></span></li>
<li class="list-group-item"><strong>Mobilni telefon : </strong> <span class="badge"><?php echo $row['mobile_phone'];?></span></li>
<li class="list-group-item"><strong>Email : </strong> <span class="badge"><?php echo $row['email'];?></span></li>
<lI class="list-group-item"><strong>Država  : </strong> <span class="badge"><?php echo $row['state'];?></span></li>
<li class="list-group-item"><strong>Grad  : </strong> <span class="badge"><?php echo $row['city'];?></span></li>
<li class="list-group-item"><strong>Adresa  : </strong> <span class="badge"><?php echo $row['address'];?></span></li>





</ul>



</div><!-- col-md-4 -->

</div><!-- row -->

<br><br>
<?php
if($row['video_url'] != null ){
?>
<div class="row">
<div class="col-md-10">
<h3>Video klip</h3>
<br>

 <?php
 	echo $row['video_url']=	preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
		"<iframe width=\"90%\" height=\"400px\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",
		$row['video_url']);


 
 
 ?>


</div></div>



<br><br>

<?php		
}
?>
<div class="row">
<div class="col-md-7">

<h3>Informacije o oglasu</h3>
<ul class="list-group">


<li class="list-group-item"><strong>Cena : </strong> 
                            <?php
							if(empty($row['ads_price'])){
								?>
                                <span class="badge">Pozovite za cenu</span>
                                <?php
								
							}
							else
							{

							?>
                             <span class="badge">
                             <?php
							 echo $row['ads_price'];?>&nbsp;<?php echo $row['curency_short_code'];
							 ?>
                             
                             </span>
                            <?php


							}
							
							?> 


</li>
<li class="list-group-item"><strong>Opis : </strong> <span style=" display:block;
    min-width: 10px;
    padding: 4px 9px;
    font-size: 12px;
    box-sizing:border-box;
    font-weight: 700;
    line-height: 2;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;"><?php echo $row['ads_description'];?></span></li>
<li class="list-group-item"><strong>Objavljen : </strong>  <span class="badge"><?php echo $row['created'];?></span></li>
<li class="list-group-item"><strong>Zadnja promena : </strong>  <span class="badge"><?php echo $row['updated'];?></span></li>
<li class="list-group-item"><strong>Trajanje : </strong>  <span class="badge"><?php echo $row['duration_name'];?></span></li>

<li class="list-group-item"><strong>Stanje predmeta : </strong>  <span class="badge"><?php echo $row['status_name'];?>
</span></li>

<li class="list-group-item"><strong>Broja pregleda : </strong>  <span class="badge"><?php echo $row['views'];?></span></li>
<li class="list-group-item"><strong>Slanje predmeta : </strong>  <span class="badge"> <?php echo $row['shipping_name'];?></span></li>
<li class="list-group-item"><strong>Plaćanje predmeta : </strong>  <span class="badge"><?php echo $row['payement_name'];?> </span></li>




</ul>


</div><!-- col-md-8 -->
<div class="col-md-5">






<h4>Akcija</h4>
<form action="/update-form.php" method="post" role="form">
<input type="hidden" name="ads_name" value="<?php echo $row['ads_name'];?>">
<input type="hidden" name="ads_image_1" value="<?php echo $row['ads_image_1'];?>">
<input type="hidden" name="ads_image_2" value="<?php echo $row['ads_image_2'];?>">
<input type="hidden" name="ads_image_3" value="<?php echo $row['ads_image_3'];?>">
<input type="hidden" name="ads_image_4" value="<?php echo $row['ads_image_4'];?>">
<input type="hidden" name="ads_image_5" value="<?php echo $row['ads_image_5'];?>">
<input type="hidden" name="ads_image_6" value="<?php echo $row['ads_image_6'];?>">
<input type="hidden" name="ads_image_7" value="<?php echo $row['ads_image_7'];?>">
<input type="hidden" name="ads_image_8" value="<?php echo $row['ads_image_8'];?>">
<input type="hidden" name="ads_image_9" value="<?php echo $row['ads_image_9'];?>">
<input type="hidden" name="ads_image_10" value="<?php echo $row['ads_image_10'];?>">
<input type="hidden" name="username" value="<?php echo $row['username'];?>">
<input type="hidden" name="first_name" value="<?php echo $row['first_name'];?>">
<input type="hidden" name="last_name" value="<?php echo $row['last_name'];?>">
<input type="hidden" name="phone_1" value="<?php echo $row['phone_1'];?>">
<input type="hidden" name="phone_2" value="<?php echo $row['phone_2'];?>">
<input type="hidden" name="state" value="<?php echo $row['state'];?>">
<input type="hidden" name="city" value="<?php echo $row['city'];?>">
<input type="hidden" name="address" value="<?php echo $row['address'];?>">
<input type="submit" name="submit" value="Pošalji poruku" class="btn btn-primary">
<input type="submit" name="submit" value="Prati oglas" class="btn btn-default">
<input type="submit" name="submit" value="Prijavi oglas" class="btn btn-danger">


</form>

<br>
<hr>
<br>
<?php include_once 'assets/include/facebook_buttons.php' ;?>







</div><!---- col--md-4 -->
</div><!-- row -->


 </div><!-- well well-sm -->
</div><!-- container -->
      <div class="container">
        
         <div class="row">
           
            <div class="col-sm-12">
              
              
             <!--begin tabs going in narrow content -->
               <ul class="nav nav-tabs sidebar-tabs" id="sidebar" role="tablist">
                  <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Komentari</a></li>
                  <li><a href="#tab-2" role="tab" data-toggle="tab">Slični proizvodi</a></li>
                  <li><a href="#tab-3" role="tab" data-toggle="tab">Tagovi</a></li>
               </ul><!--/.nav-tabs.sidebar-tabs -->
               <!-- Tab panes -->
               <div class="tab-content">
                  <div class="tab-pane active" id="tab-1">
                     <?php include_once 'assets/include/disqus-comment-form.php'; ?>
                  </div><!--/.tab-pane -->
                  <div class="tab-pane" id="tab-2">
                  





    <div class="row">
    	<div class="col-md-12">
        
            <?php
	
	try {
		
	$sql = '
	
	select * from ads a left join categories c 
	on a.category_id = c.category_id 
	left join users u 
	on a.user_id = u.user_id 
	left join ads_curency ac 
	on a.ads_curency = ac.curency_id
	where a.category_id = :category_id 
	order by created desc limit 21
	
	
	';
	$query = $db -> prepare ( $sql );
	$query -> execute ( array (
	':category_id' => $row['category_id']
	)
	);
	while ($row = $query -> fetch ( PDO::FETCH_ASSOC)){
		?>

        
<div class="col-sm-6 col-md-4"  >
	<div class="thumbnail" style="height:570px;" >
    
        <h4 class="text-center"><?php echo $row['category_name'];?></h4>
	<div  class="col-md-12" style="height:300px !important; width:100%;">				
 <img class="group list-group-image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1'];?>"
  alt="<?php echo $row['ads_name'];?>" title="<?php echo $row['ads_name'];?>" style="margin:0 auto; width:95%; height:95%;" />
</div>

					<div class="caption" >



<div class="row" >
                    							
                          <div class="col-md-12 col-xs-12">
								<h4><?php echo $row['ads_name'];?></h4>
							</div>
            
                                
                                </div>
<div class="row" >
                    <div class="col-md-12">
                    						<p><?php echo substr($row['ads_description'] , 0 , 90 );?></p>
                                            </div>

</div>                               
<div class="row" >
							<div class="col-md-12 col-xs-12 price" >
								<h3>
								<label><?php
							if(empty($row['ads_price'])){
								?>
							<span class="badge">Pozovite za cenu</span>
<?php
								
							}
							else
							{
								?>
							<span class="badge"><?php echo $row['ads_price'];?>&nbsp;<?php echo $row['curency_short_code'];?>
                            </span>
                            <?php
								
							}
							
							?></label></h3>
							</div>
						</div>
<div class="row"  >
							<div class="col-md-12" >
		<a href="/oglas/<?php echo $row['ads_id'];?>" class="btn btn-primary btn-product"> Detaljnije</a></div>
						</div>
                               
  

						
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


            
        </div> 

	</div>











          
  </div><!--/.tab-pane  2 -->
                  <div class="tab-pane" id="tab-3">
                     <p>Tag Content</p>
                  </div><!--/.tab-pane -->
               </div><!--/.tab-content -->
              
            </div> <!--/.col-sm-4 -->

           
           

           
         </div><!--/.row -->
        
      </div><!--/.container -->
<br><br>










<?php include_once("assets/include/footer.inc.php") ?>
<?php include_once("assets/include/jqueryscript.inc.php") ?>
<?php include_once("assets/include/ajax-live-search-script.php") ?>

<script type="text/javascript" src="/assets/js/jssor.slider-21.1.5.mini.js"></script>
<script type="text/javascript" src="/assets/js/carousel-view-add-page.js"> </script>
<script type="text/javascript" src="/assets/js/list-grid-script-view-add-page.js"></script>
<script id="dsq-count-scr" src="//beplsatni-mali-i-veliki-oglasi.disqus.com/count.js" async></script>
       <!-- LINK TO YOUR LOCAL COPY OF THIS SCRIPT, THIS IS A DEMO ONLY -->
      <script type="text/javascript" src="/assets/js/bootstrap-tabcollapse.js"></script> 
      <script type="text/javascript" src="/assets/js/tabs-view-add-page.js"> </script> 
<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>