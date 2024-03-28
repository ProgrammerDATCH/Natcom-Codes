<?php
$conn = mysqli_connect("localhost", "root", "", "dev_db");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$res = mysqli_query($conn, $sql);

$found = mysqli_num_rows($res);

if($found == 1){
    $id = mysqli_fetch_assoc($res)['id'];
    //add to session
    session_start();
    $_SESSION['loggedInUserId'] = $id;
    //end
    header("location: home.php");
    exit();
}
else{
    echo "Failed to login";
}