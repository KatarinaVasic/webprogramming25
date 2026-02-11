<?php
$servername = "localhost";
$username = "amk1011817";   // example: amk1011817
$password = "0VDqR0LI";   // the password you use for phpMyAdmin
$dbname = "wp_amk1011817";         // example: wp_amk1011817

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
