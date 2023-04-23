<?php
session_start();
$username="";
$email="";
$errors=array();


$db= mysqli_connect("localhost","root","","gsrproject");
if(isset($_POST['submit'])){
    $surname = $_POST['surname'];
    $password = $_POST['passwordd'];
  
  
    if (empty($password)) {
        array_push($errors, "Password Required");
    }
    
    if (count($errors)==0) { 
        $query="SELECT * FROM itsup WHERE passwordd='$password'";
        
        $results1= mysqli_query($db,$query);
   
        if ($row=mysqli_fetch_array($results1)) {

            $_SESSION['surname'] = $row['surname'];

            header('Location: homee.php');
           
         } 
         else{
             array_push($errors,"Wrong Surname or Password");
         }
    
    }
  
  
  }
  ?>