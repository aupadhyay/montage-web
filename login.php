<?php
	session_start();
	require("../databases/config.php");
	echo "Test";
	if(isset($_POST['email'])){
		$username = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['password']);
		$query = mysql_query("SELECT * FROM `users` WHERE `email`='$username' AND `pass`='$pass'");
		echo "1";
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
			echo $first_name;
			echo $last_name	
		}
		echo "Nope";
	}
	else{
		echo "not set";
	}

?>