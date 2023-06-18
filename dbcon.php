<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  //echo '<script>alert("Connected Successfully !")</script>';
}
?>