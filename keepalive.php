<?php

require_once 'config.php';


$data = $db->select('member', '*');

// create cros domain
header('Access-Control-Allow-Origin: *');

// displaying on json
header('Content-Type: application/json');
echo json_encode($data);
