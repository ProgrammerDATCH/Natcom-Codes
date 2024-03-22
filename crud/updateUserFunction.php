<?php
    $names = $_POST['names'];
    $email = $_POST['email'];
    $id = $_POST['user_id'];
    include 'connection.php';
    $sql = "UPDATE users SET names = '$names', email = '$email' WHERE id = $id;";
    mysqli_query($conn, $sql);
    header('location: index.php');
