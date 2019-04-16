<?php 
include("header.php");
include("logoutserver.php");
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" href="css/style.css" />
	<title>Login</title>

	
</head>
<body>

	<div class="full">

<form method="post" action="logout.php">
	<?php include("error.php");  ?>

	<div class="container">
	<div class="row">
		<div class="col-md-5">
		</div>
		<div class="col-md-5">
			<h1><b>Hope you will be back soon!</b></h1>
			<div class="input_group">
		<input type="text" name="username" placeholder="Username">
	</div>
</div>
<div class="col-md-2">
		</div>
	</div>

	
	<div class="row">
		<div class="col-md-5">
		</div>
		<div class="col-md-5">
			<div class="input_group">
		<input type="password" name="password" placeholder="Password">
	</div>
</div>
<div class="col-md-2">
		</div>
	</div>

	
	<div class="row">
		<div class="col-md-5">
		</div>
		<div class="col-md-5">
			<div class="input_group">
		<button type="submit" name="logout" class="btn">Logout</button>
	</div>

</div>
<div class="col-md-2">
		</div>
	</div>
</div>

</form>
</div>
<?php
include("footer.php");
?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


