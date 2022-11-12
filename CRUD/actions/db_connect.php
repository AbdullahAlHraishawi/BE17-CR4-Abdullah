<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "be17_cr4_abdullah_biglibrary";

// create connection
$connect = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}