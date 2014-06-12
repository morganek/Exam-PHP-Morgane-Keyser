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
	            <li class="moment"><a href="moment-echobrain.php">
	                <p class="titremoment">Jellyneck - Echobrain<span><br>par Patricia Herens</span></p>
	                <img class="imgmoment" src="img/flux/echobrain-800.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="moment-supertramp.php">
	                <p class="titremoment">From Now On - Supertramp<span><br>par Béatrice Francq</span></p>
	                <img class="imgmoment" src="img/flux/newborn-800.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="moment-donomar.php">
	                <p class="titremoment">Danza Kuduro - Don Omar<span><br>par Adélaïde Viaene</span></p>
	                <img class="imgmoment" src="img/flux/donomar-800.jpg" alt="#">
	            </a></li>
	        </ul>
	         
	        <ul class="ligne2">
	             <li class="moment"><a href="moment-pierrerapsat.php">
	                <p class="titremoment">Les Rêves Sont En Nous - Pierre Rapsat<span><br>par Patricia Herens</span></p>
	                <img class="imgmoment" src="img/flux/pierrerapsat-800.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="moment-jprorive.php">
	                <p class="titremoment">Li Bia Bouquet - Jean-Pierre Rorive<span><br>par Adélaïde Viaene</span></p>
	                <img class="imgmoment" src="img/flux/libiabouquet-800.jpg" alt="#">
	            </a></li>
	            
	             <li class="moment"><a href="moment-blackeyedpeas.php">
	                <p class="titremoment">I Gotta Feeling - Black Eyed Peas<span><br>par Hugo Rousseau</span></p>
	                <img class="imgmoment" src="img/flux/ecole-800.jpg" alt="#">
	            </a></li>
	
	        </ul>
        </div>
        <nav class="pages">
            <ul>
                <li class="left"><a href="#"></a></li>

                <li class="right"><a href="indexp2.php">Page suivante</a></li>
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