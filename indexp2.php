<?php
require 'core/init.php';
include 'includes/head.php';
include 'includes/header.php';

$user = new User();

if(Session::exists('home')) {
	echo '<p>', Session::flash('home'), '</p>';
}

if($user->isLoggedIn()) {
	?>
	<div id="container">
		
		<div id="flux">
	        <ul class="ligne1">
	            <li class="moment"><a href="#">
	                <p class="titremoment">B.Y.O.B. - System of a Down<span><br>par Jean-Jacques Homard</span></p>
	                <img class="imgmoment" src="img/flux/p2pont.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="#">
	                <p class="titremoment">The Power! - Snap<span><br>par Frank Underwood</span></p>
	                <img class="imgmoment" src="img/flux/p2dos.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="#">
	                <p class="titremoment">You've Got Time - Regina Spektor<span><br>par Piper Chapman</span></p>
	                <img class="imgmoment" src="img/flux/p2foret.jpg" alt="#">
	            </a></li>
	        </ul>
	         
	        <ul class="ligne2">
	             <li class="moment"><a href="#">
	                <p class="titremoment">Colors - New World Sound<span><br>par Jony Ive</span></p>
	                <img class="imgmoment" src="img/flux/p2camera.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="#">
	                <p class="titremoment">Blue Steel - Bot'Ox<span><br>par John Doe</span></p>
	                <img class="imgmoment" src="img/flux/p2gare.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="#">
	                <p class="titremoment">Jump - Van Halen<span><br>par Jane Doe</span></p>
	                <img class="imgmoment" src="img/flux/p2nuit.jpg" alt="#">
	            </a></li>
	
	        </ul>
        </div>
        <nav class="pages">
            <ul>
                <li class="left"><a href="index.php">Page précédente</a></li>

                <li class="right"><a href="#"></a></li>
            </ul>
        </nav>
	</div>
	
	<?php include 'includes/footer.php'; ?>
	<?php

	if($user->hasPermission('admin')) {
	?>
		<p>You're also an administrator!</p>
<?php
	}

} else {
	echo 'Vous devez <a href="connexion.php"><b>vous connecter</b></a> ou <a href="inscription.php"><b>vous inscrire</b></a>!';
	
}

?>