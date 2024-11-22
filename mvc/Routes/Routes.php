<?php
require_once "../controller/PostController.php";

$controller = new PostController();


// if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'list') {
    $controller->listPosts();
// } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create') {
//     $controller->createPost($_POST['name']);
// }
