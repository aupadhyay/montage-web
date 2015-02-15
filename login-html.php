<?php
	require("header.php");
?>
<html>
	<body>
		<div class="container">
			<div class="jumbotron">
				<form action="login.php" method="post">
					<label for="email">Email:</label>
					<input type="text" name="email" class="form-control" id="email" placeholder="Email"><br>
					<label for="password">Password:</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					<input type="submit" class="btn">
				</form>
			</div>
		</div>
	</body>

</html>