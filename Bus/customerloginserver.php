<?php 
session_start();
  //$name="";
  $email="";
  $errors=array( ); 
$db=mysqli_connect('localhost','root','','busticket');

// $_SESSION['userlogin']=true;

if(isset($_POST['login'])){
	// $_SESSION['name']=$name;
	//$name=$_SESSION['name'];
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);

if(empty($email)){
		array_push($errors, "Email is required");
	}

	if(empty($password)){
		array_push($errors, "Password is required");
	}
	
	if(count($errors)==0){
	    $password1=md5($password);
		$sql="SELECT * FROM customer WHERE  Email='$email' AND Password='$password1' LIMIT 1";

		$result=mysqli_query($db,$sql);
		 $usr = mysqli_fetch_assoc($result);
             $name= $usr["Name"];
$_SESSION["name"]= $name;

             // 	$query= "SELECT * FROM bus where Bus_Id='$id' LIMIT 1";
             //  $result= mysqli_query($db,$query);
             // $book = mysqli_fetch_assoc($result);
             // $strt= $book["Starting"];

		if(mysqli_num_rows($result)==1){
			
			//$_SESSION['name']=$name;
			$_SESSION['email']=$email;
            $_SESSION['phone']=$phone;
            $_SESSION['userlogin']=true;
           header("Location:home.php");

		}
		else{
			array_push($errors, "Enter correct Email or Password");
			
				}
			}
		
}


?>