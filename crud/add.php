<?php
include 'connection.php';
if(isset($_POST['addUser'])){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (names, email) VALUES ('$names', '$email');";
    $res = mysqli_query($conn, $sql);
    if($res > 0){
        header('location: index.php');
    }
    else echo "User not created successfully";
}
else{
    echo "Hackers are not allowed!";
}

?>