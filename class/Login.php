<?php
/**
 * This class implements a login service with encrypted password. 
 * 
 * @author Alexandre J. Martins <alexandre@ajmartins.com.br> github.com/amartins90
 *
 */
class Login
{
	private $username;
	private $password;
	private $logged = false;

	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;

		$this->login();
	}

	private function login()
	{
		$credentials = parse_ini_file('data/auth.ini');

		if ($this->username == $credentials['username'] && password_verify($this->password, $credentials['password'])) {
			$this->logged = true;
		}
	}

	public function check()
	{
		return $this->logged;
	}
}
