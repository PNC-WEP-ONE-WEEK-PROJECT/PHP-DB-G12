
<?php 
session_start();

require_once('../models/login_acc.php');
$email = $_POST['email'];
$user_id = getIdUser($email)['user_id'];
echo $email . "<br>";
$input_password = $_POST['password'];
echo "user Input " . $input_password . " <br>";

$db_password = user_password($email)['password']; // From Database
echo "db_password . " . $db_password . "<br>";


// // echo $encryptPass;
// $encryptPass = password_hash($input_password, PASSWORD_DEFAULT);
// echo "encrypt . " . $encryptPass . "<br>";

if(password_verify($input_password, $db_password)) {
    $_SESSION['user_id'] = $user_id;
    echo "Password verified";
    header('location: /index.php');
    
} else {
    header('location: /index.php');
    // echo "Incorect P";
}

// $password = "mengyi.yoeng34@gmail.comM";
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    // user input ---- db_passs
// if(password_verify($password, $hashed_password )) {
//     echo "TRUE";
    // If the password inputs matched the hashed password in the database
    // Do something, you know... log them in.
// }else{
//     echo "FASLE";
// }

// $password = $_POST['password'];
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);;



// if(password_verify($password, $hashed_password)) {
//     echo "TRUE";
//     // If the password inputs matched the hashed password in the database
//     // Do something, you know... log them in.
// }else{
//     echo "FASLE";
// }