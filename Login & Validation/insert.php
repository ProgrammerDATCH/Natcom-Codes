<?php
$conn = mysqli_connect("localhost", "root", "", "dev_db");
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirmPassword = trim($_POST['confirmPassword']);

//validation
if($name == "" || $email == "" || $password == "" || $confirmPassword == ""){
    header("location: register.php?msg=invalid_input&name=" . $name ."&email=" . $email);
    exit();
}

if($password != $confirmPassword){
    header("location: register.php?msg=password_not_match&name=" . $name ."&email=" . $email);
    exit();
}

if(strlen($password) < 6){
    echo "Password too short";
    exit();
}

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
$res = mysqli_query($conn, $sql);

if($res == 1){
    echo "Added successfully!";
}
else{
    echo "Failed to INSERT";
}