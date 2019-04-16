<?php
 session_start();
if($_SESSION['userlogin']==true)
include("loggedheader.php");
else 
include("header.php");

  $feedbacks=array();
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
   
</head>
<body>

    <div class="full">
    <div class="container">
      <br><br> 
       <?php
                  
                    # code...
                  
                  $email=$_SESSION['email'];
                  $phone = $_SESSION['phone'];
                  

                  $query= "SELECT Name,Body FROM feedback ";
                  $result= mysqli_query($db,$query);
                  if (mysqli_num_rows($result)>0) {
                    
                      while ($feedback=mysqli_fetch_array($result)) {
                   $feedbacks[]=$feedback;
                    }
                          
                  
               ?>
          <?php  foreach($feedbacks as $feedback ) { ?>
        <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-8">

        <h4><b>Name:</b></h4> <?php echo $feedback["Name"] ?>

            </div>

          </div>

          <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-8">

        <h4><b>Feedback:</b></h4> <?php echo $feedback["Body"] ?>

            </div>


          </div>
           <hr>
<?php


}
}

?>
 <!--   <?php
  // include("footer.php");
?>   -->


  </div>
</div>
  <!-- <br><br><br><br><br><br><br><br><br><br> -->
 <!--  <?php
   // include("footer.php");
?>   -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


