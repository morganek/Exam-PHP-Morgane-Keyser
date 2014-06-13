<?php
require 'core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
		$user = new User();

		$remember = (Input::get('remember') === 'on') ? true : false;
		$login = $user->login(Input::get('username'), Input::get('password'), $remember);

		if($login) {
			Redirect::to('index.php');
		} else {
			echo '<p>Mauvais nom d\'utilisateur ou mot de passe</p>';
		}
	}
}
include 'includes/head.php';
?>
<header>
    <h1 class="logo"><a href="intro.php">That song.</a></h1>

</header>

<div id="container">
	<section class="contenu">
		<form action="" method="post">
			<div class="field">
				<p>
					<label for="username">Nom d'utilisateur:</label>
					<input type="text" name="username" id="username">
				</p>
			</div>
		
			<div class="field">
				<p>
					<label for="password">Mot de passe:</label>
					<input type="password" name="password" id="password">
				</p>
			</div>
		
			<div class="field">
				<p>
					<label class="souvenirde" for="remember"><input type="checkbox" name="remember" id="remember"> Se souvenir de moi</label>
				</p>
			</div>
		
			<p class="boutonlogin"> 
				<input type="submit" value="SE CONNECTER">
			
			<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
			</p>
		</form>

	</section>
</div>