<?php 
    include 'link.php';
    session_start();

	$username = $_POST["name"];
	$email= $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $admin = 0;

    $query = "insert into users(username, email, password, phone, admin) values ('$username','$email','$password','$phone','$admin')";
    $result = mysqli_query($dbhandle, $query) or die(mysqli_error($dbhandle)); 

    $_SESSION["username"] = $username;
	//header("location:???.php");
?>		