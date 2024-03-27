<?php
session_start();
session_unset();
// unset($_SESSION['user_id']);
session_destroy();