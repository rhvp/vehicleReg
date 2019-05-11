<?php

$conn = mysqli_connect("localhost","root","","cars");


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $c_password = md5($_POST['c_password']);
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
    $query = "INSERT INTO users (username,password,firstname,lastname,phone,address) VALUES ('$username','$password','$firstname','$lastname','$phone','$address')";
    
    if(mysqli_query($conn, $query)) {
        header("location: ../dashboard.php?login=yes");
    } else {
        header("location: ../index.html?signup=failed");
    }
    
}
