<?php 
session_start();
if ($_SESSION['userlogin']==true) {
include("loggedheader.php");	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content ="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
<p><h2>Counter:</h2>Arambagh</p>
<p><h2>Price:</h2>1000</p>
<div class="input_group">
		<button type="submit" name="confirmcash" class="btn-primary">Confirm</button>
	</div>
</div>
<?php 
} 
else {
	header("Location:customerlogin.php");
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("footer.php");
?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>