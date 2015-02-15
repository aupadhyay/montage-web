<?php
	require("header.php");
	require("../databases/config.php");
	if(isset($_POST['first_name'])){
		echo "Post received!";
		$first_name = mysql_escape_string($_POST['first_name']);
		$last_name = mysql_escape_string($_POST['last_name']);
		$email = mysql_escape_string($_POST['email']); 
		$password = mysql_escape_string($_POST['password']);
		$sql_query = mysql_query("INSERT INTO `users` (`first_name`, `last_name`, `email`,`pass`) VALUES ('$first_name','$last_name','$email','$password');");
		echo "Test";
	}

?>

<html>
	
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Register</h1>

				<!--Register Form -->
				<form action="register-sql.php" method="POST" name="registerForm">
					<label for="first_name">
						First Name:
						<input type="text"class="form-control" id="first_name" name="first_name"placeholder="First Name...">
					</label><br>
					<label for="last_name">
						Last Name:
						<input type="text"class="form-control" id="last_name" name="last_name"placeholder="Last Name...">
					</label><br>
					<label for="email">
						Email:
						<input type="email" class="form-control"id="email" name="email"placeholder="Email...">
					</label><br>
					<label for="password">
						Password:
						<input type="password" class="form-control" id="password" name="password"placeholder="Password...">
					</label><br>

					<input class="btn" type="submit">
				</form>
			</div>
		</div>
	</body>
</html>