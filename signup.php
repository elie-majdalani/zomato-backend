<?php
include("connection.php");

$email = $_GET["email"];
$password = hash("sha256", $_GET["password"]);

$query = $mysqli->prepare("Select id from users where email = ? AND password = ?");
$query->bind_param("ss", $email, $password);
$query->execute();
$query->store_result();
$num_rows = $query->num_rows;
$query->bind_result($id,$role);
$query->fetch();
$response = [];

if($num_rows == 1){
    $response["response"] = "used";
}else{
    $query = $mysqli->prepare("INSERT INTO users (password, email) VALUES (?, ?)");
    $query->bind_param("ss", $password, $email);
    $query->execute();
    $response["response"] = "Logged in";
}

?>
