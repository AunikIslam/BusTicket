<?php
 session_start();

  include("loggedheader.php");



// include("customerloginserver.php");
  $buses=array();
$db=mysqli_connect("localhost","root","","busticket");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page </title>
	<meta name="viewport" content ="width=device-width,initial-scale=1,shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css" href="css/index.css">
	 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <title>Untitled</title>
   <!-- <link rel="stylesheet" href="bootstrap.min.css" /> -->
    <link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
  
<div class="full">
  <?php if($_SESSION['userlogin']==true) { ?>
<div class="container">
  <h1>See Routes</h1>

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
              

          <!-- <?php  foreach($buses as $bus ) { 



     
            ?> -->
              <!-- <table class="table table-bordered table-sm"> -->
  
    <!-- <tr>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr> -->


          <tbody>
    <tr> 
      
      <td> <?php  echo $bus["Bus_Id"] ?></td>
      <td><?php echo $bus["Starting"] ?></td>
      <td><?php echo $bus["Destination"] ?></td>
       <td><?php echo $bus["Time"] ?></td>
       <td><a class="btn btn-primary" href="bookingticket.php?id=<?php echo $bus["Bus_Id"] ?>" role="button">book</a></td>
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
}

else {
  header("Location:customerlogin.php");
}
//}
//}

?>



  

</div>
</div>

 <?php include("footer.php");?>	



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>