<?php
require_once('../models/post.php');

$id = $_POST['id'];
$post_description = $_POST['post_description'];
$post_image = $_POST['image'];
updatePost($id,$post_description, $post_image);
header('location: /index.php');