<?php
	require("../databases/config.php");
	if(isset($_POST['first_name'])){
		echo "Post received!";
		$first_name = mysql_escape_string($_POST['first_name']);
		$last_name = mysql_escape_string($_POST['last_name']);
		$email = mysql_escape_string($_POST['email']); 
		$password = mysql_escape_string($_POST['password']);
		$sql_query = mysql_query("INSERT INTO `users` VALUES (NULL, '$first_name','$last_name', '$email', '$password');");
		echo $sql_query;
		echo $first_name;
		echo $last_name;
		echo $email;

	}

?>
