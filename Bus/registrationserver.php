<?php 
session_start();
  $username=" ";
  $email=" ";
   $phone=" ";
   $password1=" ";

  $errors=array( ); 
$db=mysqli_connect('localhost','root','','busticket');


if(isset($_POST['register_btn'])) {
	
	$name=mysqli_real_escape_string($db,$_POST['name']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$phone=mysqli_real_escape_string($db,$_POST['phone']);
	$password1=mysqli_real_escape_string($db,$_POST['password1']);
	$password2=mysqli_real_escape_string($db,$_POST['password2']);

	
	

if(empty($name)){
		array_push($errors, "Name is required");
	}
	if(empty($email) ){
		array_push($errors, "Email is required ");
	}
if(empty($phone) ){
		array_push($errors, "Phone number is required");
	}
	if(empty($password1)){
		array_push($errors, "Password is required");
	}
	/*if(empty($password2)){
		array_push($errors, "Confirmation is required");
	}*/
	
	/*if(count($errors)==0){
				$sql="SELECT * FROM user WHERE  Username='$username'";
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result)>0){
			array_push($errors, "Already has an Username");
		}


		$sql="SELECT * FROM user WHERE  Email='$email'";
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result)>0)
			array_push($errors, "Already has an Email");
}
		 if(count($errors)==0){	
         $password=md5($password1);
 		$sql="INSERT INTO user(Username,Email,Password) VALUES('$username','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['email']=$email;
		$_SESSION['success']="wELCOME";
				header("Location:343.php");
			}*/
			if (count($errors)==0) {
				if($password1!=$password2){
		array_push($errors, "Two passwords did not match");
	}
	else{
		$password1=md5($password1);
	}
					
					$sql="SELECT * FROM customer WHERE Email='$email'";
					$result1=mysqli_query($db,$sql);
					$sql="SELECT * FROM customer WHERE Phone='$phone'";
					$result2=mysqli_query($db,$sql);
					if(mysqli_num_rows($result1)>0 || mysqli_num_rows($result2)>0){
						array_push($errors, "Email or phone number already exists !");
					}
					else {
						$sql="INSERT INTO customer(Name,Email,Phone,Password) VALUES('$name','$email','$phone','$password1')";
		                mysqli_query($db,$sql);
		                $_SESSION['userlogin']=true;
		                $_SESSION['name']=$name;
			$_SESSION['email']=$email;
            $_SESSION['phone']=$phone;
            header("Location:home.php");
					}
				}
				}

				



?>