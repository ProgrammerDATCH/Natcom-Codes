<?php
session_start();
echo "Logged in as : " . $_SESSION['user_id'];
?>