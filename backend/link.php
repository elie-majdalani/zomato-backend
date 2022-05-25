<?php
	$dbhandle = mysqli_connect('localhost', 'root', '');
	$selected = mysqli_select_db($dbhandle, 'zomato');
?>