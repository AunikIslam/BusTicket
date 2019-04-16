<?php 

  $name="";
  $email="";
  $errors=array( ); 
$db=mysqli_connect('localhost','root','','busticket');


if(isset($_POST['update'])){

	$phone=mysqli_real_escape_string($db,$_POST['phone']);
	$email=$_SESSION['email'];
	
	$password=mysqli_real_escape_string($db,$_POST['password']);

if(empty($phone)){
		array_push($errors, "Enter phone number to update");
	}
// if(empty($email)){
// 		 array_push($errors, "Enter email to confirm");
// 	}
if(empty($password)){
		 array_push($errors, "Enter password to confirm");
	}
	
	
	if(count($errors)==0){
	     $password1=md5($password);
		$sql="SELECT * FROM customer WHERE  Email='$email' AND Password='$password1'";
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result)==1){
			// $_SESSION['name']=$name;
			// $_SESSION['email']=$email;
             //          $_SESSION['phone']=$phone;
            $sql= "UPDATE customer SET Phone='$phone' WHERE Email = '$email' AND Password='$password1'";
            mysqli_query($db,$sql);
            $_SESSION['name']=$name;
			$_SESSION['email']=$email;
                      $_SESSION['phone']=$phone;
           header("Location:customerdetails.php");

		}
		else{
			array_push($errors, "Enter correct Email or Password");
			
				}
			}
		
}


?>