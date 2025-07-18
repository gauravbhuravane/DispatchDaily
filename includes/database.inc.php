<?php

// Development Connection
// Server name or IP Address
$host = "sql12.freesqldatabase.com";

// MySQL Username
$user = "sql12790607";

// MySQL Password
$pass = "idkAqfcDwn";

// Default Database name
$db = "sql12790607";

// Creating a connection to the DataBase
$con = mysqli_connect($host,$user,$pass,$db);

/* Deployment Connection

$host = "SERVER_URL";
$user = "USERNAME";
$pass = "PASSWORD";
$db = "DATABASE_NAME";
$port = 'PORT_NO';

$con = mysqli_connect($host, $user, $pass, $db, $port);
*/

// Checking If the connection is obtained
if (!$con) {
  die("Database Connection Error");
}
