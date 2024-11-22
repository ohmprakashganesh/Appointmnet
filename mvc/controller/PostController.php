<?php
require_once "../config/database.php";

require_once "../model/Post.php";

$db= new Database();
$db->getConnection();


class PostController {
    private $db;
    private $post;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->post = new Post($this->db);
    }

    public function listPosts() {
        $stmt = $this->post->read();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
      print_r($posts) ;
        // include "../view/posts/postDatas.php";
    }

    public function createPost($name) {
        $this->post->name = $name;
        $this->post->create();
    }

    public function updatePost($id, $name) {
        $this->post->id = $id;
        $this->post->name = $name;
        $this->post->update();
    }

    public function changeStatus($id, $status) {
        $this->post->id = $id;
        $this->post->changeStatus($status);
    }
}
