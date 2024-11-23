<?php
require_once "../config/database.php";

require_once "../model/Post.php";




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
        include "../view/posts/postDatas.php";
    }

    public function createPost($name) {
        $this->post->name = $name;
        $this->post->status="Active";
        $this->post->create();
    }

    public function updatePost($name) {
        $this->post->name = $name;
        $this->post->update();
    }

    public function changeStatus($status) {
        $this->post->changeStatus($status);
    }
}
