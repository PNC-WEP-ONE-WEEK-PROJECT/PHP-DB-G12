<?php
// database 
require_once("database.php");

// Get all the comments
function getCommentsByPostId($post_id){
    global $db;
    $statement = $db->prepare("SELECT * FROM users_comments where post_id=:id");
    $statement->execute([
        ':id' => $post_id
    ]);
    return $statement->fetchAll();
}

function createCommentByPost($post_id, $comment, $user_id, $comment_date){
    global $db;
    $statement = $db -> prepare("INSERT INTO comments(comment, user_id, post_id, comment_date) VALUES (:comment, :user_id, :post_id, :comment_date)");
    $statement -> execute([
        ':comment' => $comment,
        ':user_id' => $user_id,
        ':post_id' => $post_id,
        ':comment_date' => $comment_date
    ]);
    return ($statement->rowCount() == 1);
}