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
    $statement = $db->query("SELECT * FROM users_post WHERE post_id IS NOT NULL;");
    $items = $statement->fetchAll();
    return $items;
}

/**
 * Remove item related to given item id
 * @param integer $id :  the id of the item to delete
 
 * @return boolean: true if deletion was successful, false otherwise
 */

function deleteItem($id)
{
    global $db;
    $statement = $db->prepare("DELETE FROM posts WHERE post_id = :id");
    $statement->execute([
        ':id' => $id
    ]);
    return ($statement->rowCount()==1);
}
