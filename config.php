<?php

require_once 'medoo.min.php';

$db = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'remithzu_putlkj',
	'server' => 'localhost',
	'username' => 'remithzu_pu',
	'password' => '98k9nN6h6C2',
	'charset' => 'utf8',
]);

function pr($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}