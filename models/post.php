<<<<<<< HEAD
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
=======
>>>>>>> fa09294a5f45c85ae3b82b2d09203639ac73c9a8
