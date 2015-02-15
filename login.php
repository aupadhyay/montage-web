<?php
	session_start();
	require("../databases/config_users.php");
	if(isset($_POST['email'])){
		$username = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['password']);
		$query = mysql_query("SELECT * FROM `users` WHERE `email`='$username' AND `pass`='$pass'");

		if(mysql_num_rows($query) > 0 ){
			$_SESSION['loggedin'] = 1;
			echo "Logged In!";
			while ($row = mysql_fetch_object($query)){
				$id = $row->ID;
				$first_name = $row->name;
				$last_name = $row->lname;
				$email = $row->email;
			}
			$_SESSION["id"] = $id;
			$_SESSION["first_name"] = $first_name;
			$_SESSION["last_name"] = $last_name;
			$_SESSION["email"] = $email;
			
		}
	}
	else{
		echo "not set";
	}

?>