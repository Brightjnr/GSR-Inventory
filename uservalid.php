u<?php
session_start();
$username="";
$email="";
$errors=array();
$success=array();


$db= mysqli_connect("localhost","root","","gsrproject");

//signup code

if(isset($_POST['submit'])){
    $staffno = $_POST['staffno'];

    $dep = $_POST['dep'];

    $passwordd = $_POST['passwordd'];

    $passwordd1 = $_POST['passwordd1'];

   
    $user_check_query = "SELECT * FROM users WHERE staffno='$staffno' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
    if ($user['staffno'] === $staffno) {
        array_push($errors, "Staff number already exists");
    }

    if (empty($staffno)) {
        array_push($errors, "Fill  Staff Number");
    }
    if (empty($dep)) {
        array_push($errors, "Fill Department");
    }
    
    if (empty($passwordd)) {
        array_push($errors, "Fill Password");
    }
    if ($passwordd != $passwordd1) {
        array_push($errors,"Password do not match"); 
    }
}


    else {   
        $password=md5($passwordd);
     
        $sql="INSERT INTO users (staffno,dep,passwordd) VALUES 
        ('$staffno','$dep','$password')";

        mysqli_query($db,$sql);

        header('location:login.php');

    }
}


?>