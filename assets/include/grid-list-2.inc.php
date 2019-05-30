<div class="container">
<br>
<hr>
<br>
    <div class="row">
    <h2>Oglasi</h2>
    </div>
    <div class="row">
    	<div class="col-md-12">
        
            <?php
	
	try {
		
	$sql = 'select * from ads a left join categories c 
	on a.category_id = c.category_id 
	left join users u 
	on a.user_id = u.user_id 
	left join ads_curency ac 
	on a.ads_curency = ac.curency_id
	order by created desc limit 21';
	$query = $db -> prepare ( $sql );
	$query -> execute ( );
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
</div>
