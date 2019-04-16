<?php 

include("loggedheader.php");
include("customerloginserver.php");
include("updateprofileserver.php");
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

<form method="post" action="profileupdate.php">
	<?php include("error.php");  ?>

	<div class="container">
		<?php if ($_SESSION['userlogin']==true) {
			# code...
		?>
	<div class="row">
		<div class="col-md-5">

		</div>
		<div class="col-md-5">
			<!-- <h1><b>Hello , old friend !</b></h1> -->
			<br><br><br><br>
			<div class="input_group">
		<input type="text" name="phone" placeholder="Phone">
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
		<input type="password" name="password" placeholder="Enter password to confirm">
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
		<button type="submit" name="update" class="btn">Submit</button>
	</div>

</div>
<div class="col-md-2">
		</div>
	</div>
</div>
<?php }

else {
	header('Location:customerlogin.php');
} ?>
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


