<?php
if(isset($_POST["submit"])){

    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $gender=$_POST["gender"];
    $username=$_POST["username"];
    $password=$_POST["password"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyinput= emptyinputsignup( $firstname, $lastname, $address, $email, $mobile,  $gender,$username,$password);
    $invalidusername=invalidusername($username);
    $usernameexists=usernameexists($conn,$username,$email);

    if($emptyinput!== false){
        header("location:signup.php?error=emptyinput");

        exit();
    }
    if($invalidusername!== false){
        header("location:signup.php?error=emptyinput");

        exit();
    }
    
    if($usernameexists!== false){
        header("location:signup.php?error=usernametaken");

        exit();
    }

    createUser($conn,$firstname, $lastname, $address, $email, $mobile,  $gender,$username,$password);

}
else{
    header('location:login.php');
    exit();
}

?>