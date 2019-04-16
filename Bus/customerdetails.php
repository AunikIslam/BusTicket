<?php
 // session_start();
include("loggedheader.php");
// include("customerloginserver.php");
include("registrationserver.php");

$db=mysqli_connect("localhost","root","","busticket");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>4-4-2 Formation Analysis </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
   <!--  <link rel="stylesheet" href="css/443.css" /> -->
</head>
<body>

    
    <div class="container">
      <br><br> 
       <?php
                  if ($_SESSION['userlogin']==true) {
                    # code...
                  $name = $_SESSION['name'];
                  $email=$_SESSION['email'];
                  $phone = $_SESSION['phone'];
                  // echo "Your registration is: ". $email.".";

                  $query= "SELECT * FROM customer WHERE Email='$email'";
                  $result= mysqli_query($db,$query);
                  if (mysqli_num_rows($result)>0) {
                      while ($row=mysqli_fetch_array($result)) {
                          
                  
               ?>

        <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-8">

        <h4><b>Name:</b></h4> <?php echo $row["Name"] ?>

            </div>

          </div>

          <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-8">

        <h4><b>Email:</b></h4> <?php echo $row["Email"] ?>

            </div>

          </div>

          <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-8">

        <h4><b>Phone:</b></h4> <?php echo $row["Phone"] ?>

            </div>

          </div>


           

<?php
}
}
}
else {
 header('Location:customerlogin.php');
}
?>


<!-- <div>
    <div class="container">
         
<?php
                  $query= "SELECT * FROM discussion WHERE Id=3";
                  $result= mysqli_query($db,$query);
                  if (mysqli_num_rows($result)>0) {
                      while ($row=mysqli_fetch_array($result)) {
                          
                  
               ?>
        <div class="row">
               
            <div class="col-md-3">
                <?php echo $row["First"];?>
            	
</div>
            <div class="col-md-3">
            	<?php echo $row["Second"];?>
            </div>
            <div class="col-md-3">
            	<?php echo $row["Third"];?>
            </div>
            <div class="col-md-3">
            	<?php echo $row["Fourth"];?>
        </div>
        </div>
    </div>
    
<?php
}
}    
?>
</div>
<?php
// include("links.php");
?> -->
<div class="row">
    <div class="col-md-3"></div>
    
      <a class="nav-link active" href="profileupdate.php">Change Phone No</a>

</div>

<div class="row">
    <div class="col-md-3"></div>
    
      <a class="nav-link active" href="passwordupdate.php">Change Password</a>

</div>
<div class="col-md-2">
    </div>
  </div>
  <br><br><br><br><br>
<?php
   include("footer.php");
?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


