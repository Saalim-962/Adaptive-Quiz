<?php

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "Enter your database password here";
$dbname1 = "level0";
$dbname2 = "level1";

$con1 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname1);
$con2 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname2);

if(mysqli_connect_errno())
{
    die("Database Connection failed".mysqli_error($conn));
}
?>
