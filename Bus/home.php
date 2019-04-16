<?php
 session_start();
if ($_SESSION['userlogin']==true) {
  include("loggedheader.php");
}
else {
  include("header.php");
}

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
  <div class="container">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bus1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bus2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bus3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="full">
<div class="container">
  <hr>
  <h1>See Routes</h1>
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
      
      <td> <?php  echo $bus["Bus_Id"] ?></td>
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

 <?php include("footer.php");?>	



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>