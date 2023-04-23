<?php
if(isset($_POST['userform'])){
    header('Location: login.php');
}

if(isset($_POST['manager'])){
    header('Location: table.php');
}

if(isset($_POST['itvalid'])){
    header('Location: itsuptlogin.php');
}

if(isset($_POST['find'])){
    header('Location: finaltab.php');
}
if(isset($_POST['logout'])){
    header('Location: logout.php');
}

if(isset($_POST['llogout'])){
    header('Location: itlogout.php');
}
?>