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