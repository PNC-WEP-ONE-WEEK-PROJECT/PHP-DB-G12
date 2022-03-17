<?php
require_once('../models/create.php');

// SET TIME AS TIME IN BANGKOK
date_default_timezone_set("Asia/Bangkok");

// GET DATA FROM POST
$title = $_POST['title'];
$post_description = $_POST['post_description'];
$post_date = date('Y-m-d H:i:s');
$user_id = 1;

$image = $_FILES['filename']['tmp_name']; 
$fileName = $_FILES["filename"]["name"]; 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
$img_location = strtolower($fileType);
$new_img_name = uniqid("IMG-", true). "." .$img_location;

// INSERT FILES IMAGE INTO FOLDER IMAGES
move_uploaded_file($image,'../images/'. $new_img_name);

// INSERT ALL DATAS INTO POSTS TABLE
createPost($title,$post_description,$new_img_name,$post_date,$user_id);


header('location: /index.php');

