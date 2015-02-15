<?php
	require("../databases/config.php");
	if(isset($_POST['first_name'])){
		echo "Post received!";
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql_query = mysql_query("INSERT INTO `users` (`first_name`, `last_name`, `email`,`pass`) VALUES ('$first_name','$last_name','$email','$password');");
		echo "Test";
	}
?>