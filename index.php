<?php
session_start();
include('connection.php');

//logout
include("logout.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EnergyON</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link href="style.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Fresca|Nova+Oval" rel="stylesheet">  
  </head>
  <body>
    <div class="containter-fluid">
        <div id="loginDiv" class="col-sm-offset-3 col-sm-6">
            <h1>EnergyON</h1>
            <h3>Energy Data Collection App</h3>
            
            <div id="loginmessage" class="col-sm-offset-2 col-sm-8"></div>

            
            <form class="form-horizontal" id="loginform" method="post">
              <div class="form-group">
                <label for="loginemail" class="col-sm-4 control-label sr-only">Email</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" name="loginemail" id="loginemail" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="loginpassword" class="col-sm-4 control-label sr-only">Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Password">
                </div>
              </div>  
              <button type="submit" class="btn btn-lg btn-success">Log in</button>
            </form>
<!--            <p>Lucent</p>-->
        </div>
    </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>