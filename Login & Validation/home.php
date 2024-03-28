<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
//access session
session_start();
if(isset($_SESSION['loggedInUserId'])){
    $id = $_SESSION['loggedInUserId'];
    //end

    $conn = mysqli_connect("localhost", "root", "", "dev_db");
    $sql = "SELECT * FROM users WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    $userInfo = mysqli_fetch_assoc($res);
    $name = $userInfo['name'];
    $email = $userInfo['email'];

    echo "<p>Welcome $name, Your email is $email </p>";

    echo "<a href='logout.php'>LOGOUT</a>";
}
else{
    echo "You are not logged!";
}


?>


    
</body>
</html>