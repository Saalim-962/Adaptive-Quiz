 <?php

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "avesh@19";
$dbname1 = "level0";
$dbname2 = "level1";
$dbname3 = "userdata";
$dbname4 = "score";

$con1 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname1);
$con2 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname2);
$con3 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname3);
$con4 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname4);

if(mysqli_connect_errno())
{
    die("Database Connection failed".mysqli_error($conn));
}
?>
