<?php require_once '../include/config.inc.php';


	   /*create a retrieve query*/
	   if(strlen( $_POST['name'])  > 3 ){
		   
		   	   $sql = "
		select * from ads a 
		left join categories c 
	   on a.category_id = c.category_id 
	   left join users u 
	   on u.user_id = a.user_id 
	   left join ads_curency ac 
	on a.ads_curency = ac.curency_id
	   where ads_name like '%".$_POST['name']."%' limit 0,5";
	   $sqlQuery = $db -> prepare ( $sql );
	   $sqlQuery -> execute ( );
    /*Execute the query*/
	$result = $sqlQuery -> rowCount();
    /* validating the result */
    if ($result>0){ 
        /*retrieving data */
		?>
        <div class="container">
        <div class="row">
        <div class="col-md-12 ">

<table class="table table-bordered table-hover table-invers">
 <caption class="text-left "><h2>Rezultat pretrage</h2></caption> 
 <thead class="thead-inverse">
  
    <tr>
      <th class="text-center" width="150px">Slika</th>
      <th class="text-center">Oglas</th>
      <th class="text-center">Kategorija</th>
     
    </tr>
  </thead>
  <tbody>



		<?php
        while ($search_resault = $sqlQuery -> fetch(PDO::FETCH_ASSOC )) {
			
			?>
            
        <tr>
    <td class="text-center">  
    <img src="/assets/images/product-images/<?php echo $search_resault['username'];?>/<?php echo $search_resault['ads_image_1'];?>"
    alt="<?php echo $search_resault['ads_name'];?>" title="<?php echo $search_resault['ads_name'];?>"
       width="100%" /></td>
    
    
     <td class="text-center"><a href="/oglas/<?php echo $search_resault['ads_id'];?>"><?php echo $search_resault['ads_name'];?></a></td>
    
    
     <td class="text-center"><a href="/kategorija/<?php echo $search_resault['category_id'];?>"><?php echo $search_resault['category_name'];?></a></td>
             
                      

         
            
            </tr>
            <?php 
               
        } 
		?>
  </tbody>
</table>
		</div></div></div>
        <?php
    } 
	else
	{
	?>	
		

<table class="table table-bordered table-hover">
 <caption class="text-left "><h2>Rezultat pretrage</h2></caption> 
  <thead class="thead-inverse">

  
    <tr>
      <th class="text-center">Slika</th>
      <th class="text-center">Oglas</th>
      <th class="text-center">Kategorija</th>
     
    </tr>
  </thead>
<tbody>
<tr>
<td colspan="9"><h4 class="text-center"><br><br>Nema rezultata pretrage za zadati termin<br><br></h4></td>


</tr>

</tbody>
</table>
		
<?php
	}

	   }
	   else
	   {
		   
		?>
        
        <table class="table table-bordered table-hover">
<caption class="text-left "><h2>Rezultat pretrage</h2></caption> 
   <thead class="thead-inverse">

  
    <tr>
      <th class="text-center">Slika</th>
      <th class="text-center">Oglas</th>
      <th class="text-center">Kategorija</th>
     
    </tr>
  </thead>
<tbody>
<tr>
<td colspan="9"><h4 class="text-center"><br><br>Termin pretrage mora da ima najmanje 4 karaktera<br><br></h4></td>


</tr>

</tbody>

        
        <?php   
		   
	   }












?>
