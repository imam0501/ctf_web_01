<?php
$host = 'localhost';
$db = 'auth_demo';
$user = 'root';
$pass = '';

$conn = new mysqli( $host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
?>