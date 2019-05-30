<br><hr><br>
<div class="container">
<div class="col-md-12">
<div class="row">
<h2>Oglasi</h2>
</div>
	<div class="row">
<table id="table_id"  class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th width="300px" >Slika</th>
            <th>Ime</th>
            <th>Ime kategorije</th>
            <th>Cena</th>
        </tr>
    </thead>
        <tbody>
        <?php
		$sql = '
		
		select * from ads a left join categories c 
		on a.category_id = c.category_id 
		left join ads_curency ac 
		on a.ads_curency = ac.curency_id
		left join users u 
		on a.user_id = u.user_id 
		where c.category_id = :category_id 
		order by a.created desc
		';
		$query  = $db -> prepare ( $sql );
		$query -> execute ( array(
		':category_id' => $_GET['id']
		));
		while ( $row = $query -> fetch ( PDO::FETCH_ASSOC )){
			?>



            <tr>
       <td><img src="/assets/images/product-images/<?php echo $row['username'];?>/<?php echo $row['ads_image_1'];?>" alt="<?php echo $row['ads_name'];?>"  width="300px" height="200px" title="<?php echo $row['ads_name'];?>"></td>
                <td><a href="/oglas/<?php echo $row['ads_id'];?>"><?php echo $row['ads_name'];?></a></td>
                <td><a href="/kategorija/<?php echo (int)$row['category_id'];?>"><?php echo $row['category_name'];?></a></td>
                <td><?php echo $row['ads_price'] ;?>&nbsp;<?php echo $row['curency_short_code'];?></td>
            </tr>



			<?php
		}// kraj while 
		
		
		?>

        </tbody>

</table>        
    
	</div>
</div>
</div>

<br><br>
<br><br>
