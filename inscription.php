<?php
require 'core/init.php';

if(Input::exists()) {

	if(Token::check(Input::get('token'))) {
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username' => array(
				'required' => true,
				'min' => 2,
				'max' => 20,
				'unique' => 'users'),
			'password' => array(
				'required' => true,
				'min' => 6),
			'password_again' => array(
				'required' => true,
				'matches' => 'password'),
			'name' => array(
				'required' => false,
				'min' => 2,
				'max' => 50)

		));

		if($validation->passed()) {
			$user = new User();

			$salt = Hash::salt(32);

			try {
				$user->create(array(
					'username' 	=> Input::get('username'),
					'password' 	=> Hash::make(Input::get('password'), $salt),
					'email' 	=> Input::get('email'),
					'salt'		=> $salt,
					'name' 		=> Input::get('name'),
					'joined'	=> date('Y-m-d H:i:s'),
					'group'		=> 1
				));

				Session::flash('home', 'Vous êtes inscrit et pouvez maintenant vous connecter!');
				Redirect::to('index.php');

			} catch(Exception $e) {
				die($e->getMessage());
			}

		} else {
			foreach($validate->errors() as $error) {
				echo $error, '<br>';
			}
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
					<input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>">
				</p>
			</div>
			
			<div class="field">
				<p>
					<label for="email">Adresse e-mail:</label>
					<input type="text" name="email" id="email" value="<?php echo escape(Input::get('email')); ?>">
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
					<label for="password_again">Répétez mot de passe:</label>
					<input type="password" name="password_again" id="password_again">
				</p>
			</div>
		
			<div class="field">
				<p>
					<label for="name">Votre nom complet:</label>
					<input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>">
				</p>
			</div>
		<br>
		<p class="boutoninscription"> 
			<input type="submit" value="JE M'INSCRIS!">
			<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
		</p>
		</form>
	</section>
</div>