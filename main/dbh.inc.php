<?php
$serverName="localhost";
$dbUsername="sajith123";
$dbPassword="ss199914@";
$dbName="jobseeker_login";

$conn =mysqli_connect($serverName,$dbUsername, $dbPassword,$dbName  );

if(!$conn){
    die("connection failed: " .mysqli_connect_error());

}