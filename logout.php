<?php
session_start();
session_destroy();
unset($_SESSION['dash_nama_rpb']);
//print_r($_SESSION['inventory']);
header("Location: login.php");
?>