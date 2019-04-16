<?php 
include("header.php");
include("customerloginserver.php");
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
<?php if($_SESSION['userlogin']==false) { ?>
<form method="post" action="customerlogin.php">
	<?php include("error.php");  ?>

	<div class="container">
	<div class="row">
		<div class="col-md-5">

		</div>
		<div class="col-md-5">
			<h1><b>Hello , old friend !</b></h1>
			<div class="input_group">
		<input type="email" name="email" placeholder="Email">
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
		<button type="submit" name="login" class="btn">Login</button>
	</div>

</div>
<div class="col-md-2">
		</div>
	</div>
</div>

</form>
<?php } 
else {
	header('Location:home.php');
}
?>
</div>
<?php
include("footer.php");
?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


