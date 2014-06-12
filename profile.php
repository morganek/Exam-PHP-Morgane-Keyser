<?php
require 'core/init.php';

include 'includes/head.php';
include 'includes/header.php';

if(!$username = Input::get('user')) {
	Redirect::to('index.php');
} else {
	$user = new User($username);

	if(!$user->exists()) {
		Redirect::to(404);
	} else {
		$data = $user->data();
	}

	?>
	<div id="container">
		<section class="contenu">
			<h3><?php echo escape($data->username); ?></h3>
			<p>Nom complet: <?php echo escape($data->name); ?></p>
			
			<ul>
				<li><a href="logout.php">Deconnexion</a></li>
				<li><a href="changepassword.php">Changer mon mot de passe</a></li>
				<li><a href="update.php">Changer mes informations</a></li>
			</ul>
		</section>
	</div>


	<?php
}
?>