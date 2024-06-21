<?php
session_start();

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyinputlogin($username, $password)) {
        header("Location: login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);
} else {
    header('Location: login.php');
    exit();
}
?>
