<?php
  require("header.php");
?>
<html>
	<body>
		
    <div class="container">
			<div class="jumbotron">
				<h1>Login</h1>
				<form method="POST"action="login-sql.php">
					<label for="email">
						<input class="form-control" type="email" placeholder="Email...">
					</label><br>
					<label for="password">
						<input class="form-control" type="password" placeholder="Password...">
					</label><br>
					<input type="submit" class="btn">
				</form>
			</div>
		</div>

	</body>	
</html>
