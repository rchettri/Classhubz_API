<?php
session_start();



define('SITE_URL', 'http://social.classhubz.com/');
	$oToken = json_decode(file_get_contents(SITE_URL . 'token.php?key=4245ea1ba846cd2384a8b2dd810fde83'));



	if (isset($oToken->token))
	{
		$_SESSION['token'] = $oToken->token;

		//echo 'Successfully got a token: ' . $oToken->token;

		// Here is where you can use a header('Location:'); to send the authenticated user.
	}

$oReturn = json_decode(file_get_contents('http://social.classhubz.com/api.php?token=' . $_SESSION['token'] . '&method=event.get'));


print_r($oReturn);


