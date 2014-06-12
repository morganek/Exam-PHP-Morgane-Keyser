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
			'name' => array(
				'required' => true,
				'min' => 2,
				'max' => 50)
		));

		if($validation->passed()) {

			try {
				$user->update(array(
					'name' => Input::get('name')
				));
			} catch(Exception $e) {
				die($e->getMessage());
			}

			Session::flash('home', 'Vos infos sont mises à jour!.');
			Redirect::to('index.php');
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
				<label for="name">Nom complet:</label>
				<input type="text" name="name" id="name" value="<?php echo escape($user->data()->name); ?>">
				<br>
				<input type="submit" value="METTRE A JOUR">
				<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
			</form>

		</section>
</div>