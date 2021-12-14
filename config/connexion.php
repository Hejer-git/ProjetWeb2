<?php

session_start();

$con = new mysqli("localhost","root","","forums");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}









?>