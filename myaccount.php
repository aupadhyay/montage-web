<?php
	session_start();
	require("header.php");
	$id = $_SESSION['id'];
	$first_name = $_SESSION['first_name'];
	$last_name = $_SESSION['last_name'];
	$email = $_SESSION['email'];
	echo $first_name;
?>
<html>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>My Account-<?php echo $first_name;?></h1>
				<form action="myaccount.php" method="post">
					<label for="first_name">
						<input type="text" value=<?php echo $first_name;?>>
					</label>
				</form>
			</div>
		</div>
	</body>
</html>