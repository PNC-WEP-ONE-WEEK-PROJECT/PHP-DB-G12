<?php
require_once("../views/edit_view.php");
require_once('../models/item.php');

$id = $_POST['itemId'];
$item_name = $_POST['item'];
$price = $_POST['price'];
updatePost($id,$post_description, $post_image);
header('location: /index.php');