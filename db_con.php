<?php

define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','student_infos');

// Create connection
$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>