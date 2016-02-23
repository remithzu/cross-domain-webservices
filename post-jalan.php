<?php

require_once 'config.php';

// buat cros domain
header('Access-Control-Allow-Origin: *');

echo $db->insert('jalan', $_POST);
print_r($db->error());