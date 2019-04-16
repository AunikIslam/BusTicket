<?php
session_start();
include("loggedheader.php");
 $buses=array();
$db=mysqli_connect("localhost","root","","busticket");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page </title>
	<meta name="viewport" content ="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
	<?php if ($_SESSION['userlogin']==true)  { ?>
<div class="full">
<div class="container">
<!--    <table class="table table-bordered table-sm">
        <thead>
    <tr>
      <th scope="col">Coach No</th>
      <th scope="col">Starting</th>
      <th scope="col">Destination</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
</table> -->
	<?php
                  
                    # code...
                  
                  // $email=$_SESSION['email'];
                  // $phone = $_SESSION['phone'];
                  // echo "Your registration is: ". $email.".";

                  $query= "SELECT * FROM bus ";
                  $result= mysqli_query($db,$query);
                  if (mysqli_num_rows($result)>0) {
                    
                      while ($bus=mysqli_fetch_array($result)) {
                         $buses[]=$bus;
                    }
                          
                  
               ?>
               <table class="table table-bordered table-sm">
        <thead>
    <tr>
      <th scope="col">Coach No</th>
      <th scope="col">Starting</th>
      <th scope="col">Destination</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
              

          <?php  foreach($buses as $bus ) { 



     
            ?>
              <!-- <table class="table table-bordered table-sm"> -->
  
    <!-- <tr>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr> -->


          <tbody>
    <tr>
      
      <td><?php echo $bus["Bus_Id"] ?></td>
      <td><?php echo $bus["Starting"] ?></td>
      <td><?php echo $bus["Destination"] ?></td>
       <td><?php echo $bus["Time"] ?></td>
    </tr>
</tbody>
<!-- <?php


}
}

?> -->
</table>

          <!-- <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-8">
<table>
                <tr>
                    <td </td>
                     <td></td>
                      <td></td>
                      

                </tr>
                </table>
            </div>
        </div>

 -->
        

          

        
<?php


//}
//}

?>



  

</div>
</div>

<?php 
}
else {
	header('Location:customerlogout.php');
}
?>

<?php include("footer.php");?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>