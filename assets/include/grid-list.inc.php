  <div class="container">
  <br><hr><br>
  <h3>Oglasi</h3>

    <div class="well well-sm">
        <strong>Oglasi &nbsp;&nbsp;&nbsp;</strong>
        <div class="btn-group">
            <a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span>Mreža</a>
              <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list"></span>Lista</a> 
      </div>
    </div>
    <div class="well well-sm">
    <div id="products" class="row list-group">
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
		             <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail" style="height:400px;">
                <img class="group list-group-image" src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1'];?>" alt="<?php echo $row['ads_name'];?>"
                title="<?php echo $row['ads_name'];?>"  width="400px" height="300px"/>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $row['ads_name'];?></h4>
                    <p class="group inner list-group-item-text">
                        <?php echo substr($row['ads_description'] , 0 , 100 );?></p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                            <?php
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
							
							?>
							</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <a href="/oglas/<?php echo $row['ads_id'];?>" class="btn btn-primary">Detaljnije</a>
                        
                        
                        
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		
		<?php
	}// kraj while 
	
		
		
	}
	catch ( PDOException $exception ){
	echo $exception -> getMessage();	
	}
	
	?>
    </div>
    </div>
</div>
