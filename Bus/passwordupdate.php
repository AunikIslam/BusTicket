<?php 

include("loggedheader.php");
include("customerloginserver.php");
include("passwordupdateserver.php");
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

<form method="post" action="passwordupdate.php">
	<?php include("error.php");  ?>

	<div class="container">
	

	
	<!-- <div class="row">
		<div class="col-md-5">
		</div>
		<div class="col-md-5">
			<div class="input_group">
		<input type="email" name="email" placeholder="Enter email to confirm ">
	</div>
</div>
<div class="col-md-2">
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-5">

		</div>
		<div class="col-md-5">
			<!-- <h1><b>Hello , old friend !</b></h1> -->
			<!-- <br><br><br><br> -->
			<div class="input_group">
		<input type="password" name="password1" placeholder="Enter password">
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
		<input type="password" name="password2" placeholder="Enter new password">
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


