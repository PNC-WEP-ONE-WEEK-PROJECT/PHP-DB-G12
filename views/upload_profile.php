<?php
// require_once('models/post.php');

$id = $_POST['user_id'];
$new_name = "";
$image = $_FILES["fileme"]["tmp_name"]; 
// $name = $_FILES["name"]["name"]; 
$type = pathinfo($name, PATHINFO_EXTENSION); 
$location = strtolower($type);
$new_name = uniqid("IMG-", true). "." .$location;
echo $image;

// INSERT FILES IMAGE INTO FOLDER IMAGES
// move_uploaded_file($image,'../img/'. $new_name);


// uploadProfile($new_name,$id);

// header('location: /views/profile.php');
