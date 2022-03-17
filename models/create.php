<?php
require_once('database.php');
?>

<?php 

function createPost($title, $post_description,$image,$post_date,$user_id)
{
    global $db;
    $statement = $db->prepare("INSERT INTO posts (title,post_description,image,post_date,user_id) VALUES (:title,:post_description,:image,:post_date,:user_id)");
    $statement->execute([
        'title' => $title,
        'post_description' => $post_description,
        'image' => $image,
        'post_date' => $post_date,
        'user_id' => $user_id
    ]);

    return ($statement->rowCount() == 1);

}
?>