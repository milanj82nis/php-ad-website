
            
           <?php
try {
	  $sql2 = "select * from ads a left join categories c 
			   on a.category_id = c.category_id 
			   left join users u 
			   on u.user_id = a.user_id 
			   order by created desc limit 1";
	   $sqlQuery = $db -> prepare ( $sql2 );
	   $sqlQuery -> execute ( );
	


	
}
catch ( PDOException $exception ){
echo $exception -> getMessage();	
}


?>

<div class="container">
<h3>Izdvojeni oglasi</h3>
    <div class="col-xs-12">

        <div class="well">
            <div id="myCarousel1" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner-1.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner-2.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner-3.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner-4.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    

                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner-5.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner-6.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner-7.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                            <div class="col-xs-3"><a href="http://milanjankovic.com"><img src="/assets/images/banner-images/banner8.jpg" alt="Image" class="img-responsive"></a>

                            </div>
                        </div>
                        <!--/row-->
                    </div>




                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel1" data-slide="prev">‹</a>
 <a class="right carousel-control" href="#myCarousel1" data-slide="next">›</a>

            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
</div>
