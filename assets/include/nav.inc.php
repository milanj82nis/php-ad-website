 <div class="container">

<nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  
  
  
  <div class="navbar-inherit">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
       <a class="navbar-brand" href="/početna-strana">Početna</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorije<span class="caret"></span></a>
              <ul class="dropdown-menu">
              
              <?php
try {
	
$sql = '
				select * from categories order by category_name asc
';
$query = $db -> prepare ( $sql );
$query -> execute ( );
while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
?>	
                <li><a href="/kategorija/<?php echo $row['category_id'];?>/"><?php echo $row['category_name'];?></a></li>
<?php	
}
	
	
}
catch ( PDOException $exception ) {
echo $exception -> getMessage();	
}
			  
			  
			  
			  ?>
              
              </ul>
            </li>
                <li><a href="/dodaj-oglas">Dodaj oglas</a></li>
                <li><a href="/o-nama">O nama</a></li>
    </ul>
    <div class="col-sm-3 col-md-3">
    <!-- 
        <form class="navbar-form" role="search">
        <div class="input-group">
           <input class="form-control" id="inputtext"
                            placeholder="Unesite termin pretrage.."  size="200"type='text'>

        </div>
        </form>
        -->
    </div>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="/reklamiranje">Reklamiranje</a></li>
          <li><a href="/kontaktirajte-nas">Kontakt</a></li>
          <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Moj nalog<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <?php
			  try {
			  if(isset($_SESSION['logged'])){
				?>  
                <?php if($_SESSION['access_lvl'] > 1 ){
					
					?>
					                
                <li class="dropdown-header">Aministracija sajta</li>
                <li><a href="/admin/administracija-sajta">Aministracija sajta</a></li>
                <li role="separator" class="divider"></li>

					<?php
				}
				?>
                
                <li class="dropdown-header">Moji oglasi</li>
                <li><a href="/moji-oglasi">Moji oglasi</a></li>
                <li><a href="/dodaj-oglas">Dodaj oglas</a></li>
                 <li><a href="/poruke">Poruke</a></li>

                <li><a href="/moj-nalog">Moj nalog</a></li>
                <li><a href="/promena-naloga">Promena naloga</a></li>
                 <li><a href="/brisanje-naloga">Brisanje naloga</a></li>
                <li><a href="/odjavi-se">Odjavi se</a></li>

                
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Korisinička podrška</li>
                
                <li><a href="/assets/os-ticket/">Korisnička podrška</a></li>
                <li><a href="/politika-privatnosti">Politika privatnosti</a></li>
                <li><a href="/uslovi-korišćenja">Uslovi korišćenja</a></li>
                <li><a href="/faq">F.A.Q</a></li>

				  <?php
			  }
			  else
			  {
				  
				  ?>
                  
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Moj nalog</li>
                <li><a href="/prijavljivanje">Prijavljivanje</a></li>
                <li><a href="/registracija">Registracija</a></li>
                <li><a href="/zaboravljena-šifra">Zaboravljena šifra</a></li>
                
                
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Korisinička podrška</li>
                <li><a href="/assets/os-ticket/">Korisnička podrška</a></li>
                <li><a href="/politika-privatnosti">Politika privatnosti</a></li>
                <li><a href="/uslovi-korišćenja">Uslovi korišćenja</a></li>
                <li><a href="/faq">F.A.Q</a></li>

                  <?php
				  
				  
			  }
			  }
			  catch (PDOException $exception ){
				echo $exception -> getMessage();  
			  }
			  ?>
              </ul>
            </li>
</ul>
  </div><!-- /.navbar-collapse -->
</nav></div>