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
    <title>EnergyON | Collect Data</title>

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
        <div id="dataCollectionDiv" class="col-sm-offset-3 col-sm-6">
            <h2>EnergyON</h2>
            <h3>Energy Data Collection App</h3>
            
            <hr />
            
            <form method="post" id="dataform">
                    
                  <div class="form-group row">
                      <h3> A. CONTACT DETAILS</h3>
                      
                      <div class="col-sm-12">
                        <input type="text" name="name" id="name" placeholder="Name of Contact Person" class="form-control">
                      </div>
                      
                      <div class="col-sm-5">
                        <input type="text" name="phone" id="phone" placeholder="Phone No " class="form-control">
                      </div>
                      
                      <div class="col-sm-7">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                      </div>
					  
					  
                      <div class="col-sm-3">
                        <input type="text" name="houseNo" id="houseNo" placeholder="House No" class="form-control">
                      </div>
                      
                      <div class="col-sm-9">
                        <input type="text" name="streetName" id="streetName" placeholder="Street Name" class="form-control">
                      </div>
                      
                      <div class="col-sm-6">
                        <select class="form-control js-states" id="state" name="state"></select>
                      </div>
                      
                      <div class="col-sm-6">
                        <select class="form-control js-local-govt" id="lga" name="lga"></select>
                      </div>
                  </div>
                    
                    <div class="form-group row">
                      <h3>B. HOUSEHOLD INFORMATION</h3>
                      
                      <div class="col-sm-4">
                        <input type="number" name="families" id="families" placeholder="No. of Families" class="form-control">
                      </div>
                      
                      <div class="col-sm-4">
                        <input type="number" name="children" id="children" placeholder="No. of Children" class="form-control">
                      </div>
                      
                      <div class="col-sm-4">
                        <input type="number" name="adults" id="adults" placeholder="No. of Adults" class="form-control">
                      </div>
                  </div>
                    
                    
                  <div class="form-group row">
                      <h3>B. HOUSEHOLD ENERGY REQUIREMENT IN WATTS</h3>
                      
                      <div class="col-sm-4">
                        <input type="text" id="lighting" name="lighting" placeholder="Bulbs, Flourescent etc." class="form-control">
                      </div>
                      
                      <div class="col-sm-4">
                        <input type="text" name="media" id="media" placeholder="TVs, Radios, Mobile" class="form-control">
                      </div>
                      
                      <div class="col-sm-4">
                        <input type="text" name="others" id="others" placeholder="Other elect. equipments" class="form-control">
                      </div>
                  </div>
                    
                    <div class="resultMessage"></div>
                    
                    <button class="btn btn-lg btn-success">Submit</button>
              </form>
        </div>
        
    </div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		var DataPath = "http://locationsng-api.herokuapp.com/api/v1/lgas";
		$.ajax({
			url: DataPath,
			headers: {
				"Accept" : "application/json; charset=utf-8",
				"Content-Type": "application/javascript; charset=utf-8",
				"Access-Control-Allow-Origin" : "*"
			},
			success: function(responseData){
			  DataStates(responseData);
			},
			error: function(responseData) {
			 console.log('Error fetching data')
			}
		});
		var data;
		function DataStates(collectionData) {
			data = collectionData;
			$('.js-states').change(function() {
				selectedLG();
			});
			$(document).ready(function() {
				selectedLG();
			});				
		}
		function selectedLG() {
			
			var selectedState = $('option:selected').val()
			DataPath = "http://locationsng-api.herokuapp.com/api/v1/lgas";
			$('.js-local-govt').empty();
			$.each(data, function(i, item) {
				if($('.js-states option').length <= data.length){
					$('.js-states').append('<option>'
						+ item.state
						+ '</option>')
				}
				
				if (selectedState === item.state && data[i].lgas != null) {
					for(var j=0; j<data[i].lgas.length; j++){
						$('.js-local-govt').append('<option>'
							+ item.lgas[j]
							+ '</option>')
					}
				}
			});
		}	
	</script>
    
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