<?php
include("connection.php");

$email = $_GET["email"];
$password = hash("sha256", $_GET["password"]);

$query = $mysqli->prepare("INSERT INTO users (password, email) VALUES (?, ?)");
$query->bind_param("ss", $password, $email);
$query->execute();
?>
