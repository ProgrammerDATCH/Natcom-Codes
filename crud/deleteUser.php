<?php
$userID = $_GET["id"];
include 'connection.php';
$sql = "DELETE FROM users WHERE id=$userID";
mysqli_query($conn, $sql);
header('location: index.php');