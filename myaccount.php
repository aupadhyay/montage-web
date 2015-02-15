<?php
	session_start();
	require("header.php");
	$id = $_SESSION['id'];
	$first_name = $_SESSION['first_name'];
	$last_name = $_SESSION['last_name'];
	$email = $_SESSION['email'];

	if($_POST['first_name']){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
	}
?>
<html>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>My Account-<?php echo $first_name;?></h1>
				<form action="myaccount.php" method="post">
					<label for="first_name">
						First Name:
						<input class="form-control" name="first_name" id="first_name" type="text" value=<?php echo $first_name;?>>
					</label><br>
					<label for="last_name">
						Last Name:
						<input class="form-control" name="last_name" id="last_name" type="text" value=<?php echo $last_name;?>>
					</label><br>
					<label for="email">
						Email:
						<input class="form-control" name="email" id="email" type="text" value=<?php echo $email;?>>
					</label><br>
					<input class="btn"type="submit">
				</form>
			</div>
		</div>
	</body>
</html>