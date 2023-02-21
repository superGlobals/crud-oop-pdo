<?php
session_start();

require 'config/config.php';
require 'helpers/message.php';

spl_autoload_register(function($class_name){
	require_once 'classes/'.$class_name. '.php';
});