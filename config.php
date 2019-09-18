<?php

//initialize variables
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";

//create connection
$db = mysqli_connect($dbserver, $dbuser, $dbpass);
//check connection
if(!$db){
    die("connection failed: ".mysqli_connect_error());
}

//start session
session_start();

//select database
$db_selected = mysqli_select_db($db, "eventure");

?>