<?php

require_once 'medoo.min.php';

$db = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'test_db',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
]);

function pr($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}
