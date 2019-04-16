<?php 
session_start();
  $username="";
  $email="";
  $errors=array( ); 
$db=mysqli_connect('localhost','root','','busticket');


if(isset($_POST['logout'])){
	
	
			

			
                   $_SESSION['userlogin']=false;
				   header('Location:customerlogin.php');
              
            
			
		}
		
		



?>