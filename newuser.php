<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EnergyON | New Agent</title>

    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
      <link href="style.css" rel="stylesheet">
      
      <link href="https://fonts.googleapis.com/css?family=Nova+Oval|Yanone+Kaffeesatz" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      <style>
          .container{
/*              min-height: 100vw;*/
              padding: 30px;
              margin: 70px auto;
              background: #eee;
              opacity: 0.9;
              text-align: center;
              max-width: 600px;
          }
          h2{
              color: #449D44;
          }
          
          input{
              margin-top: 5px;
          }
          .btn{
              width: 130px;
          }
      </style>
  </head>
  <body>
          <!--        Side navigation-->
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="reports.php">View Reports</a>
          <a href="mainpage.php">Collect Data</a>
          <a href="newuser.php">Create New User</a>
          <a href="profile.php">Profile</a>
          <a href="index.php?logout=1">Log Out</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="navspan">&#9776; </span>
<!--     Side navigation ends   -->
        
<div class="container ">

    <div class="row" id="newuser">
        <div>
            <h2>EnergyON</h2>
            <h3>Register a New Agent</h3>


        <form method="post" id="registrationform">

            <div class="resultMessage"></div>

          <div class="form-group row">

              <div class="col-sm-6">
                <input type="text" name="firstname" id="firstname" placeholder=" First Name" class="form-control" >
              </div>
              <div class="col-sm-6">
                <input type="text" name="lastname" id="lastname" placeholder=" Last Name" class="form-control" >
              </div>

              <div class="col-sm-6">
                <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No " class="form-control" >
              </div>

              <div class="col-sm-6">
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" >
              </div>

              <div class="col-sm-6">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" >
              </div>
              <div class="col-sm-6">
                <input type="password" name="password2" id="password2" placeholder="Re-enter Password" class="form-control" >
              </div>

<!--
              <div class="form-group">
                <label><input type="radio" name="gender" id="male" value="male">Male</label>
                  <label><input type="radio" name="gender" id="female" value="female">Female</label>
              </div>                    
-->
            </div>                    
            <button class="btn btn-lg btn-success">Submit</button>
      </form>

    </div>    
    </div>  
</div>
        
    <!--      Side navigation script-->
      <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
      </script>
      
  
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
      <script src="script.js"></script>
  </body>
</html>