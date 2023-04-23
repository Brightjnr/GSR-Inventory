<?php
session_start();
$username="";
$email="";
$errors=array();


$db= mysqli_connect("localhost","root","","gsrproject");
if(isset($_POST['submit'])){
    $staffno = $_POST['staffno'];
    $password = $_POST['passwordd'];
  
    if (empty($staffno)) {
        array_push($errors, "Staff Number Required");
    }
    if (empty($password)) {
        array_push($errors, "Password Required");
    }
    
    if (count($errors)==0) {
        $password=md5($password);
 
        $query="SELECT * FROM users WHERE staffno='$staffno' AND passwordd='$password'";
        
        $results1= mysqli_query($db,$query);
   
        if ($row=mysqli_fetch_array($results1)) {

            $_SESSION['staffno'] = $row['staffno'];

            $_SESSION['dep'] = $row['dep'];

            header('Location: form.php');
           
         } 
         else{
             array_push($errors,"Wrong Staff Number or Password");
         }
    
    }
  
  
  }

  
  ?>