<?php
$conn=mysqli_connect("localhost","root","","operation_db");
$id=$_GET['id'];
$delete="DELETE FROM `operations` WHERE id=$id";
$connect=mysqli_query($conn,$delete);
header("location:index.php");



?>