<?php

//session_start();
  
  $name="";
  $email="";
   $subject="";
   $messege="";
  $errors=array( );
  $feedbacks=array(); 
$db=mysqli_connect('localhost','root','','busticket');
if (isset($_POST['submit'])) {
	 // $name=mysqli_real_escape_string($db,$_POST['name']);
	  $name=$_SESSION['name'];
	// $email=mysqli_real_escape_string($db,$_POST['email']);
	$email=$_SESSION['email'];
	// $subject=mysqli_real_escape_string($db,$_POST['subject']);
	$body=mysqli_real_escape_string($db,$_POST['body']);

	if(empty($body)){
		array_push($errors, "Please Fill  Field");
	}
	
	if(count($errors)==0){
		$sql="INSERT INTO feedback(Name,Email,Body) VALUES('$name','$email','$body')";
		mysqli_query($db,$sql);
		array_push($feedbacks, $body);
		 $_SESSION['name']=$name;
		// $_SESSION['success']="wELCOME";
				header("Location:feedbacksuccess.php");
	}
}
?>