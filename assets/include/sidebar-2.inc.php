<!-- Recent Posts -->
<div class="well well-sm">
<div class="single recent">
<h3 class="side-title">Popularni oglasi</h3>
<ul class="list-unstyled">

<?php
try {
	
	
	$sql = '
				select * from ads a left join categories c 
				on a.category_id = c.category_id 
				left join users u 
				on a.user_id = u.user_id 
				where views > 0 
				order by views desc
				limit 5
	';
	$query = $db -> prepare ( $sql );
	$query -> execute ( array (
	
	));
	
	while ( $resault = $query -> fetch ( PDO::FETCH_ASSOC)){
		?>
        
        <li><a href="/oglas/<?php echo $resault['ads_id'];?>" >
	<div class="thumb">
        <img src="/assets/images/product-images/<?php echo $resault['username'];?>/<?php echo $resault['ads_image_1'];?>" width="60px" 
        alt="<?php echo $resault['ads_name'];?>" title="<?php echo $resault['ads_name'];?>" >
    </div>
	<div class="text">
		<h4><?php echo $resault['ads_name'];?> </h4>
		<h6><?php echo $resault['created'];?></h6>
	</div>
</a></li>
        <?php
	}// kraj while 
}
catch ( PDOException $exception ){
	echo $exception -> getMessage();
}
?>


</ul>
</div>
</div>
