<?php

include("connection.php");


$query = $mysqli->prepare("INSERT INTO restaurants (name, description, icon, phone, location) VALUES (?, ?, ?, ?, ?)");
$query->bind_param("sssss", $name, $description ,$icon ,$phone ,$location);
$query->execute();

?>