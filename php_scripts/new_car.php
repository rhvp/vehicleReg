<?php
session_start();
$conn = mysqli_connect("localhost","root","","cars");


$data = array();

$data['chasis_no'] = $_POST['chasis_no'];
$data['car_no'] = $_POST['car_no'];
$data['model'] = $_POST['model'];
$data['user_id'] = $_SESSION['id'];
$data['brand'] = $_POST['brand'];
$data['year'] = $_POST['year'];


include("../bin/functions.php");

var_dump($_POST);

if(insert($conn,$data)){
     header("location: ../dashboard.php?car_inserted");
}else{
     header("location: ../dashboard.php?car_error");
}





?>