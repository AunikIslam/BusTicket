<?php 
//session_start();
  $name="";
  $email="";
  $errors=array( ); 
$db=mysqli_connect('localhost','root','','busticket');


if(isset($_POST['update'])){

	
	$email=$_SESSION['email'];
	$password1=mysqli_real_escape_string($db,$_POST['password1']);
	$password2=mysqli_real_escape_string($db,$_POST['password2']);

// if(empty($email)){
// 		array_push($errors, "Enter Email");
// 	}
if(empty($password1)){
		 array_push($errors, "Enter password");
	}
if(empty($password2)){
		 array_push($errors, "Enter new password");
	}
	
	
	if(count($errors)==0){
	     $password1=md5($password1);
		$sql="SELECT * FROM customer WHERE  Email='$email' AND Password='$password1'";
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result)==1){
			// $_SESSION['name']=$name;
			// $_SESSION['email']=$email;
             //          $_SESSION['phone']=$phone;
			$password2=md5($password2);
            $sql= "UPDATE customer SET Password='$password2' WHERE Email = '$email' AND Password='$password1'";
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