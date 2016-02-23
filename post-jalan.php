<?php

require_once 'config.php';

// buat cros domain
header('Access-Control-Allow-Origin: *');

echo $db->insert('member', $_POST);
print_r($db->error());
