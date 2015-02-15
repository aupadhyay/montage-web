<?php
	require("header.php");
	require("../databases/config.php");
	if(isset($_POST['email'])){
		$name = mysql_escape_string($_POST['first_name']);
		$lname = mysql_escape_string($_POST['last_name']);
		$email = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['password']);
		$insert_sql = mysql_query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `pass`) VALUES ('$name', '$lname', '$email', '$pass')");
		echo "<div class='container' style='color:green;'><h1>Registered!</h1></div>";
	}

?>

<html>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Register</h1>
				<form action="register.php" method="post">
					<label for="email">First Name:</label>
					<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name"><br>
					<label for="email">Last Name:</label>
					<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name"><br>
					<label for="email">Email:</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Email"><br>
					<label for="password">Password:</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					<input type="submit" class="btn">
				</form>
			</div>
		</div>
	</body>

</html>