<?php

//session_start();
DEFINE("BASE_URL","http://localhost/rainbow/");

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'flower'); 
$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if($conn->connect_error)
die("Failed to connect database ".$conn->connect_error );
