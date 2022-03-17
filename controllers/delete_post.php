<?php
require_once("../models/post.php");
$id = $_GET['id'];
echo $id;
if (deleteItem($id)){
    deleteItem($id);
    header('location: /index.php');
}else{
    echo "Cannot delete item with id";
}