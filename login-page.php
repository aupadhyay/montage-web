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
						<input type="email" placeholder="Email...">
					</label>
					<label for="password">
						<input type="password" placeholder="Password...">
					</label>
					<input type="submit" class="btn">
				</form>
			</div>
		</div>

	</body>	
</html>
