<?php
require 'core/init.php';

$user = new User();

if(!$user->isLoggedIn()) {
	Redirect::to('index.php');
}

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'password_current' => array(
				'required' => true,
				'min' => 6),
			'password_new' => array(
				'required' => true,
				'min' => 6),
			'password_new_again' => array(
				'required' => true,
				'min' => 6,
				'matches' => 'password_new')
		));

		if($validation->passed()) {
			if(Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password) {
				echo 'Your current password is wrong.';
			} else {
				try {
					
					$salt = Hash::salt(32);	

					$user->update(array(
						'password' => Hash::make(Input::get('password_new'), $salt),
						'salt' => $salt
					));
					
					Session::flash('home', 'Your password has been changed!');
					Redirect::to('index.php');

				} catch(Exception $e) {
					die($e->getMessage());
				}
			}
		} else {
			foreach($validate->errors() as $error) {
				echo $error, '<br>';
			}
		}
	}
}

include 'includes/head.php';
include 'includes/header.php';
?>
<div id="container">
	<section class="contenu">
		<form action="" method="post">
			<div class="field">
				<label for="password_current">Votre mot de passe actuel:</label>
				<input type="password" name="password_current" id="password_current">
			</div>
			
			<div class="field">
			<label for="password_new">Votre nouveau mot de passe:</label>
				<input type="password" name="password_new" id="password_new">
			</div>
		
			<div class="field">
				<label for="password_new_again">Répétez votre nouveau mot de passe:</label>
				<input type="password" name="password_new_again" id="password_new_again">
			</div>
		
			<input type="submit" value="MODIFIER LE MOT DE PASSE">
			<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
		</form>
	</section>
</div>