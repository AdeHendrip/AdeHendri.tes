<?php

session_start();

$server = "localhost";
$user = "root";
$password  = "";
$database = "dbpasien";

$db = mysqli_connect($server, $user, $password, $database);
