<?php
	session_start();
	require("../databases/config.php");
	require("header.php");
	if(isset($_POST['email'])){
		$username = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['pass']);
		$query = mysql_query("SELECT * FROM `users` WHERE `email`='$username' AND `pass`='$pass'");
		if(mysql_num_rows($query) > 0 ){
			$_SESSION['loggedin'] = 1;
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
			header("Location: myaccount.php");
		}else{
			echo "<div class='container' style='color:red !important;'>Incorrect email or password!</div>";
		}
	}
	else{
		echo "not set";
	}

?>

<html>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Login</h1>
				<form action="login.php" method="post">
					<label for="email">
						Email:
						<input class="form-control" type="email" name="email" id="email" placeholder="Email">
					</label>
					<label for="password">
						<input class="form-control" type="password" name="pass" id="pass" placeholder="Password">
					</label>
					<input class="btn" type="submit">
				</form>	
			</div>
		</div>
	</body>
</html>