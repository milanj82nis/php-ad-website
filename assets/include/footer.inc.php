    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<h3>Statistika sajta</h3>
                
                

<p>

<?php include_once 'flag-counter.inc.php'; ?>
</p>                
  </div>
        	<div class="col-md-3 footer-nav animated fadeInUp">
            	<h3>Kategorije</h3>
            
                    <ul class="list">
              <?php
try {
	
$sql = '
				select * from categories order by category_name asc
';
$query = $db -> prepare ( $sql );
$query -> execute ( );
while ($row = $query -> fetch ( PDO::FETCH_ASSOC )){
?>	
                <li><a href="/kategorija/<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></a></li>
<?php	
}
	
	
}
catch ( PDOException $exception ) {
echo $exception -> getMessage();	
}
			  
			  
			  
			  ?>
                    </ul>
            </div>
        	<div class="col-md-3 footer-social animated fadeInDown">
            	<h3>Pratite nas</h3>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS</a></li>
                    
                </ul>
<br><br>
                <h3>Vremenska prognoza</h3>
                <ul>
                <li> <iframe id="iframe_navidiku_vreme" src="http://www.navidiku.rs/webtools/vreme/FFFFFF/F6F3EB/000000/FFFFFF/CFCFCF/15/2/YIXX0027/trenutno-vreme.html" frameborder="0" scrolling="auto" height="230" width="200"></iframe><div width="200" ></div>
</li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h3>Newsletter</h3>
                <p>Unesite vašu email adresu da bi ste dobili obaveštenje o novim oglasima</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Email adresa...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
                 
                 
<?php include_once 'kursna-lista.inc.php'; ?>
            </div>
           
        </div>
    </footer>
    <footer class="footer-bottom ">
        <div class="row">
        	<div class="col-md-9">
            
            <a href="http://milanjankovic.com" target="new">Dizajn i izrada web sajta Milan Janković , Niš , Srbija & Sva prava zadržana</a>
            </div>
            <div class="col-md-3">
           <a href="" target="new"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>&nbsp;
            <a href="" target="new"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>&nbsp;
            <a href="" target="new"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>&nbsp;
           <a href="" target="new"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>&nbsp;
           <a href="" target="new"> <i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            </div>
        </div>
     </footer><!-- footer-bottom -->
