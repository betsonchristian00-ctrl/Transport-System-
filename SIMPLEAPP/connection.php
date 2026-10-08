<?php
// this is a connection codes
// requirements for connection
$host = "localhost";
$user = "root";
$password = "";
$database = "simple_db";

// method for connection
$conn = mysqli_connect($host,$user,$password,$database);

// test connection
if(!$conn){
            die(mysqli_connect_error());
            // echo "connection oky";
}