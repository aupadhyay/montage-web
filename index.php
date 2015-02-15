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
		
		<div class="container">
			<div class="jumbotron"> 
				<h1>Hi! Welcome to <em>SparkUS</em>...</h1>
			</div>
		</div>
        <div class="container">
        <div class="row">
        <div class="col-md-6">
          <h1></h1>  
          <p>BRUH..</p>
        </div>
        <div class="col-md-6">
          <p>Bruh..</p>
        </div>
      </div>
    </div>
		<script src="js/bootstrap.js"></script>
	

  </body>	
</html>




















