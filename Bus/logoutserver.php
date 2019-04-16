<?php 
session_start();
  $username="";
  $email="";
  $errors=array( ); 
$db=mysqli_connect('localhost','root','','user_reg');


if(isset($_POST['logout'])){
	
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);

if(empty($username)){
		array_push($errors, "Username is required");
	}

	if(empty($password)){
		array_push($errors, "Password is required");
	}
	
	if(count($errors)==0){
	    $password1=md5($password);
		$sql="SELECT * FROM user WHERE  Username='$username' AND Password='$password1'";
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result)==1){
			session_destroy();
			header("Location:index.php");
		}
		else{
			array_push($errors, "Enter correct Username or Password");
			
				}
			}
		
}


?>