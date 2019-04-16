<?php
session_start();
include("loggedheader.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>After Contact</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<div class="container">
	<br><br>
	<?php     
	          if($_SESSION['userlogin']==true) {
              $name=$_SESSION['name'];
               echo  "Thanks for your opinion: ". $name.".";
                }

                else {
                	header('Location:customerlogin.php');
                }

	?>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
					</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- <img src="contact.jpg" style="margin-top: 80px;"><br> -->
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- <br><h1><b>Thanks for your feedback !</b></h1><br>
			<h1><b>We will response as soon as possible</b></h1><br><br><br><br><br> -->
		</div>
		<div class="col-md-3"></div>

	</div>

<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			
		</div>
		<div class="col-md-3"></div>
	</div>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<?php

include("footer.php");
?>
</html>