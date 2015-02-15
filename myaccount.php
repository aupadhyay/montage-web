<?php
	session_start();
	require("header.php");
	$id = $_SESSION['id'];
	$first_name = $_SESSION['first_name'];
	$last_name = $_SESSION['last_name'];
	$email = $_SESSION['email'];
?>
<html>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>My Account <?php echo $first_name;?></h1>
			</div>
		</div>
	</body>
</html>