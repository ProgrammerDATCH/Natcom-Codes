<?php
    $conn = mysqli_connect("localhost", "root", "", "user_management");
    if(!$conn){
        echo "Connectng to te server failed!";
        exit();
    }
    