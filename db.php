<?php
include 'Database.php';

$dbhost = 'localhost';
$dbuser = 'username';
$dbpass = 'password';
$dbname = 'database_name';

$database = new Database($dbhost, $dbuser, $dbpass, $dbname);