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
         
             include "../View/Post/Main.php";
    
    }

    public function createPost($data) {

        if (empty($data['name'])) {
            echo "Post name cannot be empty.";
            return;
        }

        $this->post->name = htmlspecialchars($data['name']);
        $this->post->status = "Active";
        include '../View/posts/postDatas.php';

        echo "<h1>function run success fully <h1>";
        // $this->post->create();
    }

    public function updatePost($name) {
        $this->post->name = $name;
        $this->post->update();
    }

    public function changeStatus($status) {
        $this->post->changeStatus($status);
    }
}
