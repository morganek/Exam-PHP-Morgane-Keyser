<!DOCTYPE html>

	<html>
		<?php include 'includes/head.php'; ?>
		
		<body>
		<?php 
			include 'includes/header.php'; 
			require_once 'core/init.php';
		?>
		
		<div id="container">
			<section class="contenu">
				
				<div class="colprofil">
					
					<ul class="monprofil">
						<li><h2>TFEDWM14</h2></li>
						<li><a href="changepassword.php">Changer mon mot de passe</a></li>
						<li><a href="update.php">Changer mon nom</a></li>
						<li><a href="#">Changer ma photo</a></li>
						<li><a href="logout.php">Déconnexion</a></li>
					</ul>
					
					<a href="#"><img class="imgprofil" src="img/pp/tfedwm14.jpg" alt="#"></a>
					<div id="clear"></div>
					
					<h2 class="mesmoments">Mes moments:</h2>
					
					<p>Vous n'avez actuellement posté aucun moment. <a href="partagez.php" >Partagez votre première histoire!</a></p>
					
					<h2 class="mesmoments">Mes recommandations:</h2>
					</div>
			
			</section>
		
		<div id="flux">
	        <ul class="ligne1">
	        
	            
	             <li class="moment"><a href="moment-supertramp.php">
	                <p class="titremoment">From Now On - Supertramp<span><br>par Béatrice Francq</span></p>
	                <img class="imgmoment" src="img/flux/newborn-800.jpg" alt="#">
	            </a></li>
	            
	            
	            <li class="moment"><a href="moment-echobrain.php">
	                <p class="titremoment">Jellyneck - Echobrain<span><br>par Patricia Herens</span></p>
	                <img class="imgmoment" src="img/flux/echobrain-800.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="moment-pierrerapsat.php">
	                <p class="titremoment">Les Rêves Sont En Nous - Pierre Rapsat<span><br>par Patricia Herens</span></p>
	                <img class="imgmoment" src="img/flux/pierrerapsat-800.jpg" alt="#">
	            </a></li>
	        </ul>
		</div>

		</div>
		
		
		        <?php include 'includes/footer.php'; ?>
		</body>