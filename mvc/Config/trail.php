<?php
require 'Database.php';

$db = new Database();
$db->getConnection();
print_r($db);

