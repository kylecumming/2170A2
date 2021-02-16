<?php 
//Establishing connection to the database
$hostservername = "localhost";
$username = "root";
$password = "root";
$dbname = "2170db";

$dbconnection = new mysqli($hostservername, $username, $password, $dbname);
//Error message is connection is not successful
if($dbconnection->connect_error){
    die("Error connecting to db" . $dbconnection->connect_error);
}

?>