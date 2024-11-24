<?php 
include_once './Database.php';
$obj= new Database();
$data=$obj->getConnection();
echo "hello ";

