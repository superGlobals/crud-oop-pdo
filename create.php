<?php
require 'config/init.php';

$users = new Users;

if (isset($_POST['submit'])) {
	$data = array();
	$data['firstname'] = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
	$data['lastname'] = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
	$data['username'] = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
	$data['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

	if ($users->insert($data)) {
		
		redirect('index.php', 'User added successfully', 'success');

	}else{
		header("location: index.php");
	}
}

$pages = new Template('pages/insert.view.php');

echo $pages;