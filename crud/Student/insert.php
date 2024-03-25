<?php
$conn=mysqli_connect("localhost","root","","operation_db");
if (isset($_POST['add'])) {
    $name=$_POST['names'];
    $email=$_POST['email'];
    $insert="INSERT INTO operations( names, email) VALUES ('$name','$email')";
$result=mysqli_query($conn,$insert);
if ($result==1) {
    header("location:index.php");
}
else {
    echo"error";
}
}








?>