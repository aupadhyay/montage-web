<?php
	require("header.php");
?>
<html>
	<body>
		<div class="container">
		<div class="jumbotron">
		<form action="login.php" method="post">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" placeholder="Email"><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="Password">
		</form>
		</div>
		</div>
	</body>

</html>