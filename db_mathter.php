<?php
$con = mysqli_connect("localhost","della","della123","db_mathter");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>