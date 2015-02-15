<?php
	require("../databases/config.php");
	if(isset($_POST['email'])){
		$name = mysql_escape_string($_POST['name']);
		$lname = mysql_escape_string($_POST['lname']);
		$email = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['password']);
		$insert_sql = mysql_query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `pass`) VALUES ('$name', '$lname', '$email', '$pass')");
	}
	else{
		echo "not set";
	}

?>