<?php
session_start();

// Create a global configuration
$GLOBALS['config'] = array(
	'mysql' => array(
		'host' 		=> 'localhost',
		'username' 	=> 'root',
		'password' 	=> 'root',
		'db' 		=> 'lr'
	),
	'remember' => array(
		'cookie_name'	=> 'hash',
		'cookie_expiry' =>  604800
	),
	'session' => array(
		'session_name'	=> 'user',
		'token_name'	=> 'token'
	)
);

// Autoload classes
function autoload($class) {
	require_once 'classes/' . $class . '.php';
}
spl_autoload_register('autoload');

// Include functions
require_once 'functions/sanitize.php';

// Check for users that have requested to be remembered
if(Cookie::exists(Config::get('remember/cookie_name'))) {
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

	if($hashCheck->count()) {
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}

}