<?php
// database 
require_once("database.php");

/**
 * Get all items
 * return array of items
 */
function getItems()
{
    global $db;
    $statement = $db->query("SELECT * FROM users_post;");
    $items = $statement->fetchAll();
    return $items;
}
/**
 * Get a single post
 * @param integer $id : the post id
 
 * @return associative_array: the post related to given post id
 */
function getPostById($id)
{
    global $db;
    $statement = $db->prepare("SELECT post_description, image FROM users_post WHERE post_id=:id");
    $statement->execute([
        ':id' => $id
    ]);
    return $statement -> fetch();
}
/**
 * Update a Post given id and attibutes
 * @param integer $id :  		the id of the post to update
 * @param string  $item_name :  the item name
 * @param integer $price :  	the item price
 * 
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function updatePost($id, $post_description, $post_image)
{
    global $db;
    $statement = $db->prepare("UPDATE users_post SET post_description=:post_description, image=:post_image WHERE post_id=:id");
    $statement->execute([
        ':post_description'=> $post_description,
        ':post_image'=>$post_image,
        ':id'=>$id
    ]);
    return ($statement->rowCount() == 1);
}
