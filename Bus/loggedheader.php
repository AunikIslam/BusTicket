<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Untitled</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700" />
    <link rel="stylesheet" href="Header-Dark.css" />
    <link rel="stylesheet" href="Navigation-with-Button.css" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container"><a class="navbar-brand" href="home.php"><b><h2>Modern Express</h2></b></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar navbar-toggler-icon">
                        </span>
                </button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="home.php">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="booking.php">Booking</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="customerdetails.php">Profile</a></li>
                       <!--  <li class="nav-item" role="presentation"><a class="nav-link active" href="feedback.php">Feedback</a></li> -->
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                            href="register.php">Feedback</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="feedback.php">Post feedback</a>
                                 <a class="dropdown-item" role="presentation" href="showfeedback.php">See feedback</a>
                                  <!-- <a class="dropdown-item" role="presentation" href="serie.php">Serie A</a> -->
                            </div>
                        </li>
                    </ul>
                    <span class="navbar-text actions">
                        <a href="customerlogout.php" type="submit" name="login" class="btn">Log Out</a>
                        <!-- <a class="btn btn-primary action-button" role="button" href="register.php">Sign Up</a> -->


                    </span>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>