<!DOCTYPE html>

	<html>
		<?php include 'includes/head.php'; ?>
		
		<style>
		body {
			min-height: 100%;
			background: url('img/bg.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
		}

/*header h1 a{
	color: white;
}*/

h2{
	color: white;
	position: relative;
	top: 220px;
	font-size: 2.5em;
	font-weight: 100;
}


		</style>
		<body>
			<?php 
				require_once 'core/init.php';
			?>
			<header>
			    <h1 class="logo"><a href="intro.php">That song.</a></h1>
			
			</header>
			<div id="introbg">
				<section class="contenu">
					
					<h2>Ces morceaux qui composent votre vie</h2>
					
					<nav class="intro">
						<a href="decouvrez-un-moment.php">Découvrez un moment</a>
						<a href="connexion.php">Connectez-vous</a>
						<a href="inscription.php">Inscrivez-vous</a>
					</nav>
					
				</section>
			</div>
		</body>