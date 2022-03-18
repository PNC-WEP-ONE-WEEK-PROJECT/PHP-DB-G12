<?php
require_once('../models/post.php');
require_once('../models/like.php');

$like_status = 1;
$post_id = $_POST['post_id'];
$user_id = 1;
echo $like_status;
echo $post_id;
echo $user_id;
userLike($like_status,$post_id, $user_id);
header('location: /index.php');