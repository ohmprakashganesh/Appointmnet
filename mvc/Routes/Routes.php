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
if (isset($_GET['route']) && $_GET['route'] === 'create-post') {
    // Include the create post page or handle it via a controller
    include "../view/posts/create.php";  // Directly include create.php
} else {
    // Default route: List posts
    $PostController->listPosts();
}

// if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'list') {
    // $PostController->listPosts();
    // $ActivityController->listActivities();
    // $AppointmentController->listAppointments();
    // $OfficerController->listOfficers();
    // $VisitorController->listVisitors();
// } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create') {
//     $controller->createPost($_POST['name']);
// }
