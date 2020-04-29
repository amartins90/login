<?php
/**
 * 
 * @author Alexandre J. Martins <alexandre@ajmartins.com.br> github.com/amartins90
 *
 */
include 'class/Login.php';

if (!$_POST) {

	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

	$login = new Login($username, $password);

	if ($login->check()) {
		echo "You're logged!";
	} else {
		echo "Login failed";
	}
}
