<?php 
include('loggedheader.php');
if (isset($_GET['id'])) {
	$id=$_GET['id']; }

session_start();
// $buses=array();
$db=mysqli_connect("localhost","root","","busticket");

	// echo "$id";
	$query= "SELECT * FROM bus where Bus_Id='$id' LIMIT 1";
              $result= mysqli_query($db,$query);
             $book = mysqli_fetch_assoc($result);
             $strt= $book["Starting"];
             
              $dest= $book["Destination"];
              $time = $book["Time"];

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
      <div class="full">
      	<div class="container">
      		<?php  if ($_SESSION['userlogin']==true) { ?>
      		<h3>Starting: <?php echo  $strt ?></h3>
      		<br>
      		<h3>Destination: <?php echo  $dest ?></h3>
      		<br>
      		<h3>Time <?php echo  $time ?></h3>
      	</div>
      </div>
      <hr>
      <div class="container">
      <iframe src="https://calendar.google.com/calendar/embed?src=mj8ou4f2hotfgiune503e4c81k%40group.calendar.google.com&ctz=Asia%2FDhaka" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
  </div>
  <hr>
      <div class="container">
      	<h3>Seat Plan</h3>
      	<div class="row">
      	<div class="col-md-3">
      	<a class="btn btn-secondary" href="finalticket.php">A1</a> <br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">B1</a><br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">C1</a><br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">D1</a><br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">E1</a><br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">F1</a><br> <br>
      </div>
      
      <div class="col-md-6">
      	<a class="btn btn-secondary" href="finalticket.php">A2</a>  <a class="btn btn-secondary" href="finalticket.php">A3</a><br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">B2</a>  <a class="btn btn-secondary" href="finalticket.php">B3</a> <br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">C2</a>  <a class="btn btn-secondary" href="finalticket.php">C3</a> <br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">D2</a>  <a class="btn btn-secondary" href="finalticket.php">D3</a> <br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">E2</a>  <a class="btn btn-secondary" href="finalticket.php">E3</a> <br> <br>
      	<a class="btn btn-secondary" href="finalticket.php">F2</a>  <a class="btn btn-secondary" href="finalticket.php">F3</a> <br> <br>

      </div>
  </div>
</div>
<hr>
<div class="container">
	<h3>Payment Method</h3>
	<br>
	<div class="row">
		<div class="col-md-6">
			<a class="btn btn-primary" href="cash.php">Cash</a> 
		</div>
		<div class="col-md-6">
			<a class="btn btn-primary" href="bkash.php">Bkash</a> 
		</div>
	</div>
</div>

       	

<?php 
} 
else {
	header("Location:customerlogin.php");
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("footer.php");?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>

</html>
