<?php

//start session and connect
session_start();
include ('connection.php');


//get user_id
$id = $_SESSION['user_id'];


//Get username sent through Ajax
$firstname = $_POST['firstname'];

//Run query and update username
$sql = "UPDATE users SET first_name='$firstname' WHERE user_id='$id'";
$result = mysqli_query($link, $sql);

if(!$result){
    echo '<div class="alert alert-danger">There was an error updating storing the new username in the database!</div>';
}else{
    $_SESSION['user_id'] = $firstname;
}

?>