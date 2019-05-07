<?php
session_start();
$conn = mysqli_connect("localhost","root","","cars");


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $query = "SELECT * FROM users where username='$username' AND password='$password'";
    
    $makequery = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($makequery) > 0){
    
        while($user_details = mysqli_fetch_assoc($makequery)){
            $id = $user_details['id'];
            $_SESSION['id'] = $id;
            header("location: dashboard.php");
        }
        
    }else{
        header("location: index.html");
    }
    
    
    
}