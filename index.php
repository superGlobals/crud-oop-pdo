<?php 

require 'config/init.php';

$users = new Users;

$pages = new Template('pages/home.view.php');

$pages->result = $users->getAll();

if (isset($_POST['delete'])) {
	$id = $_POST['id'];

	if ($users->delete($id)) {
		redirect('index.php', 'User deleted successfully', 'success');
	}else{
		header("location: index.php");
	}
}



echo $pages;