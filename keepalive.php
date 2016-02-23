<?php

require_once 'config.php';


$data = $db->select('jalan', '*');

// buat cros domain
header('Access-Control-Allow-Origin: *');
// buat nampilin json
header('Content-Type: application/json');
echo json_encode($data);