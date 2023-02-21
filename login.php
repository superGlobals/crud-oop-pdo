<?php

require 'config/init.php';

$users = new Users;

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) && empty($password)) {
		redirect('login.php', 'Username & password is required', 'warning');
	}elseif ($users->login($username, $password)) {
		redirect('index.php', 'Login successfully', 'success');

	}else{
		$_SESSION['username'] = $username;
		redirect('login.php', 'Invalid username or password', 'warning');
	}
}


$pages = new Template('pages/login.view.php');

echo $pages;