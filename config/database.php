<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'christian');
define('DB_PASSWORD', 'christian');
define('DB_NAME', 'feedback_project_database');

//  create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// check the connection
if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}
