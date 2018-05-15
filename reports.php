<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
include('connection.php');

$user_id = $_SESSION['user_id'];

////get username and email
//$sql = "SELECT * FROM users WHERE user_id='$user_id'";
//$result = mysqli_query($link, $sql);
//
//$count = mysqli_num_rows($result);
//
//if($count == 1){
//    $row = mysqli_fetch_array($result, MYSQL_ASSOC); 
//    $firstname = $row['first_name'];
//    $email = $row['email']; 
//}else{
//    echo "There was an error retrieving the username and email from the database";   
//}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EnergyON | Reports</title>

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
          body{
              background: #eee;
          }
         tr{
             cursor: pointer;    
          }
      </style>
  </head>
  <body>
    
<div class="container-fluid">
    
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
    
    <div class="row reports">
        <h2>REPORTS</h2>
        
        <div class="resultMessage"></div>
        
        <div id="sort">

            <!--  Search Form-->
           <form method="post" id="searchform" class="form-inline col-sm-8 col-sm-offset-2">
<!--
               <div class="form-group">
                <label for="criteria">Search record by:</label>
                <select class="form-control" name="criteria">
                    <option value="">--</option>   
                    <option value="name">Name</option>   
                    <option value="phone">Phone</option>   
                    <option value="street">Street Name</option>   
                    <option value="state">State</option>   
                    <option value="lga">LGA</option>   
                </select>
              </div>
-->
              <div class="form-group">
                <input type="text" class="form-control"  name="keyword" placeholder="Enter Keyword">
              </div>
              <button type="submit" id="search" class="btn btn-success">Search</button>
        </form>
        </div>
        
        <table class="table table-striped table-bordered table-responsive">
        <thead>
          <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>House No</th>
            <th>Street Name</th>
            <th>State</th>
            <th>LGA</th>
            <th>Families</th>
            <th>Children</th>
            <th>Adults</th>
            <th>Lighting</th>
            <th>Media Equip</th>
            <th>Others</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              
          </tr>
        </tbody>
      </table>
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
      
      <!--This Script populates the state and local govt in the form.-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js"></script>
      <script src="script.js"></script>
  </body>
</html>