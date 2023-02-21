<?php

require 'config/init.php';

$users = new Users;

$user_id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST['update'])) {
	$data = array();
	$data['firstname'] = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
	$data['lastname'] = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
	$data['username'] = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
	$data['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

	if ($users->update($user_id, $data)) {
		
		redirect('index.php', 'User updated successfully', 'success');

	}else{
		header("location: index.php");
	}
}	

$pages = new Template('pages/update.view.php');

$pages->view = $users->getSingle($user_id);

echo $pages;