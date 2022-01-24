<?php

// Script to connect to the database

$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "iDiscuss";

$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

// if-else to print succes & error messages with error code in case of failure and sql query in case of success

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}

?>