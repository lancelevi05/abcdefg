<?php
session_start();

if(isset($_SESSION['user_id'])) {
    echo "Welcome, ".$_SESSION['username']."!<br>";
    echo '<a href="logout.php">Logout</a>';
} else {
    header("Location: login.php");
    exit;
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">