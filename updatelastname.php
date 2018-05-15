<?php

//start session and connect
session_start();
include ('connection.php');

//get user_id
$id = $_SESSION['user_id'];

//Get username sent through Ajax
$lastname = $_POST['lastname'];

//Run query and update username
$sql = "UPDATE users SET last_name='$lastname' WHERE user_id='$id'";
$result = mysqli_query($link, $sql);

if(!$result){
    echo '<div class="alert alert-danger">There was an error updating the new lastname in the database!</div>';
}else{
    $_SESSION['user_id'] = $lastname;
}

?>