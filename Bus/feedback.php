<?php
session_start();
include("loggedheader.php"); 
include("feedbackform.php");?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="full">
<main>
<form method="post" action="feedback.php">
    <?php include("error.php");  ?>

    <div class="container">

        <?php if($_SESSION['userlogin'] ==true ) { ?>

    <div class="row">

        <div class="col-md-5">

        </div>
        <div class="col-md-5">
            <h1><b>Share your experience !</b></h1>
          <!--  <?php echo $_SESSION["nm"]; ?> -->
          <!--   <div class="input_group">
        <input type="text" name="name" placeholder="Name">
    </div> -->
</div>
<div class="col-md-2">
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
            <div class="input_group">
        <input type="email" name="email" placeholder="Email">
    </div>
</div>
<div class="col-md-2">
        </div>
    </div> -->

   <!--  <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
            <div class="input_group">
        <input type="text" name="subject" placeholder="Subject">
    </div>
</div>
<div class="col-md-2">
        </div>
    </div> -->

    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
            <div class="input_group">
       <textarea name="body" placeholder="Message"></textarea>
    </div>
</div>
<div class="col-md-2">
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
            <div class="input_group">
        <button type="submit" name="submit" class="btn">Send Message !</button>
    </div>

</div>
<div class="col-md-2">
        </div>
    </div>
</div>
<?php
}

else {

    header('Location:customerlogin.php');
}
?>
</form>
</main>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include("footer.php"); 
?>
</body>
</html>




