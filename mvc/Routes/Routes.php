<?php
require_once "../controller/PostController.php";
require_once "../controller/VisitorController.php";
require_once "../controller/ActivityController.php";
require_once "../controller/AppointmentController.php";
require_once "../controller/OfficerController.php";




$PostController = new PostController();
$visitorController=new VisitorController();
$activityController= new ActivityController();
$appointmentController=new AppointmentController();
$OfficerController= new OfficerController();


// if (isset($_GET['route']) && $_GET['route'] === 'create-post') {
//     // Include the create post page or handle it via a controller
//     include "../view/posts/create.php";  // Directly include create.php
// } else {
//     // Default route: List posts
    // $PostController->listPosts();
// }


// if(isset($_GET['action'])){
// $action = isset($_GET['action']) ? $_GET['action'] : 'post';
// // Route to the appropriate method
// switch ($action) {
//     case 'post':
//         $PostController->listPosts();
//         break;
//     case 'officer':
//         $OfficerController->ListOfficers();
//         break;
//     case 'activity':
//         $activityController->listActivities();
//         break;
//     case 'appointments':
//         $appointmentController->listAppointments();
//         break;
//     case 'visitor':
//         $visitorController->listVisitors();
//         break;
//     default:
//     $PostController->listPosts();
//         break;
// }
// }



        $PostController->listPosts();


        $OfficerController->ListOfficers();
    
        $activityController->listActivities();

        $appointmentController->listAppointments();

        $visitorController->listVisitors();

    $PostController->listPosts();




