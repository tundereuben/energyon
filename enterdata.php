<?php
//start session and connect to database
session_start();
include('connection.php');

//Get all data sent with the POST method and Sanitize valuess
$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); 
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$houseNo = filter_var($_POST["houseNo"], FILTER_SANITIZE_EMAIL);
$streetName = filter_var($_POST["streetName"], FILTER_SANITIZE_EMAIL);
$state = filter_var($_POST["state"], FILTER_SANITIZE_EMAIL);
$lga = filter_var($_POST["lga"], FILTER_SANITIZE_EMAIL);
$families = filter_var($_POST['families'], FILTER_SANITIZE_STRING);
$children = filter_var($_POST['children'], FILTER_SANITIZE_STRING);
$adults = filter_var($_POST['adults']);
$lighting = filter_var($_POST['lighting'], FILTER_SANITIZE_STRING);
$media = filter_var($_POST['media'], FILTER_SANITIZE_STRING);
$others = filter_var($_POST['others'], FILTER_SANITIZE_STRING);


//prepare variables for the queries
$name = mysqli_real_escape_string($link, $name);
$phone = mysqli_real_escape_string($link, $phone);
$email = mysqli_real_escape_string($link, $email);
$houseNo = mysqli_real_escape_string($link, $houseNo);
$streetName = mysqli_real_escape_string($link, $streetName);
$state = mysqli_real_escape_string($link, $state);
$lga = mysqli_real_escape_string($link, $lga);
$families = mysqli_real_escape_string($link, $families);
$children = mysqli_real_escape_string($link, $children);
$adults = mysqli_real_escape_string($link, $adults);
$lighting = mysqli_real_escape_string($link, $lighting);
$media = mysqli_real_escape_string($link, $media);
$others = mysqli_real_escape_string($link, $others);


//Insert details into the table
$sql = "INSERT INTO energy_data 
    (name, phone, email, houseNo, streetName, state, lga, families, children, adults, lighting, media_equipment, others, time)
    VALUES
    ('$name','$phone', '$email', '$houseNo','$streetName','$state','$lga', '$families', '$children', '$adults', '$lighting', '$media', '$others', now())";

$result = mysqli_query($link, $sql);

if(!$result){
    echo '<div class="alert alert-danger">There was an error inserting the data in the database!<div>';
}else{
    echo '<div class="alert alert-success">Success!<div>';
}
?>

