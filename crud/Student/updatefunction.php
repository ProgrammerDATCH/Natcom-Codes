<?php
$conn=mysqli_connect("localhost","root","","operation_db");
if (isset($_POST['submit'])) {
    $name=$_POST['names'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $update="UPDATE operations SET names='$name',email='$email' WHERE id=$id";
    $run=mysqli_query($conn,$update);
    header("location:index.php");
}


?>