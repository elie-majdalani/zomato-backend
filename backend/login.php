<?php 
    include 'link.php';
    session_start();

	$username = $_POST["username"];
    $password = $_POST["password"];
   
    $query="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($dbhandle, $query);
    $resultuser=mysqli_num_rows($result);
    
    //to be used if pass is wrong at the front end
    if($resultuser<1){
        header("location:index.php?wrongpass=1");
            
    }else{
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $row["role"];
        //to add profile pic later?
    }
?>