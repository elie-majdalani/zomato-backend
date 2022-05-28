<?php

include("connection.php");
$name=$_GET["name"];
$description=$_GET["description"];
$icon=$_GET["icon"];
$phone=$_GET["phone"];
$location=$_GET["location"];

$query = $mysqli->prepare("INSERT INTO restaurants (name, description, icon, phone, location) VALUES (?, ?, ?, ?, ?)");
$query->bind_param("sssss", $name, $description ,$icon ,$phone ,$location);
$query->execute();

?>