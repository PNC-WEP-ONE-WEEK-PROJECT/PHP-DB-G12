<?php
require_once('../models/post.php');

$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$country = $_POST['country'];
$date_of_birth = $_POST['birthday'];
$gender = $_POST['gender'];
$user_id = $_POST['id'];

if(updateUserInfo($first_name,$last_name,$phone,$email,$country,$date_of_birth,$gender,$user_id)) {

    header('location: /views/profile.php');
}else {
    echo "<script>alert('You cannot create account! Your email already have an account!! Please Try with other email address!!')</script> ";
    header('location: /views/register.php');

}


