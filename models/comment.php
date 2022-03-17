<?php
// database 
require_once("database.php");

// Get all the comments
function getCommentsByPostId($post_id){
    global $db;
    $statement = $db->query("SELECT * FROM comments where post_id=:id");
    $statement->execute([
        ':id' => $post_id
    ]);
    return $statement->fetchAll();
}