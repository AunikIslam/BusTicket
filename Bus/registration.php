<?php
include("header.php");
include("registrationserver.php"); 
 ?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" href="css/style.css" />
	<title>Registration</title>

	
</head>
<body>

	<div class="full">
     <?php if ($_SESSION['userlogin']==false) { ?>
     	
     
<form method="post" action="registration.php">
	<?php include("error.php");  ?>

	<div class="container">
	<div class="row">
		<div class="col-md-5">
		</div>
		<div class="col-md-5">
			<h1><b>Create An Account</b></h1>
			<div class="input_group">
		<input type="text" name="name" placeholder="Name">
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
		<input type="number" name="phone" placeholder="Phone">
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
		<input type="password" name="password1" placeholder="Password">
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
		<input type="password" name="password2" placeholder="Re-enter Password">

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
		<button type="submit" name="register_btn" class="btn">Register</button>
		<!-- <h6>Already a member ? <a href="login.php">Login! </a></h6> -->
	</div>

</div>
<div class="col-md-2">
		</div>
	</div>
</div>

</form>
</div>
<?php 
}
else {
	header('Location:home.php');
} 
?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
<?php
include("footer.php");
?>
</html>



