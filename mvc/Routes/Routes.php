<?php
require_once "../controller/PostController.php";
require_once "../controller/VisitorController.php";
require_once "../controller/ActivityController.php";
require_once "../controller/AppointmentController.php";
require_once "../controller/OfficerController.php";

$PostController = new PostController();
$ActivityController = new ActivityController();
$AppointmentController = new AppointmentController();
$OfficerController = new OfficerController();
$VisitorController = new VisitorController();


// if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'list') {
    $PostController->listPosts();
    $ActivityController->listActivities();
    $AppointmentController->listAppointments();
    $OfficerController->listOfficers();
    $VisitorController->listVisitors();
// } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create') {
//     $controller->createPost($_POST['name']);
// }
