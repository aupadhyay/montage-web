<?php
	require("header.php");
?>

<html>
	
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Register</h1>

				<!--Register Form -->
				<form action="register.php" method="POST" name="registerForm">
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