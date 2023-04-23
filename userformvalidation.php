<?php
session_start();
$username="";
$email="";
$errors=array();
$success=array();


$db= mysqli_connect("localhost","root","","gsrproject");

//signup code

if(isset($_POST['submit'])){
    $lname = $_POST['lname'];

    $fname = $_POST['fname'];

    $statuss = $_POST['statuss'];

    $ptitle = $_POST['ptitle'];

    $dep = $_POST['dep'];

    $snumber = $_POST['snumber'];

    $extensionn = $_POST['extensionn'];

    $phone = $_POST['phone'];

    $supervisorr = $_POST['supervisorr'];

    $expirydate = $_POST['expirydate'];

    $pdrivedep = $_POST['pdrivedep'];

    $pdrivelevel = $_POST['pdrivelevel'];
    
    $coremail = $_POST['coremail'];

    $homenet = $_POST['homenet'];

    $internetaccess = $_POST['internetaccess'];

    $accjust = $_POST['accjust'];

    $prontoaccess = $_POST['prontoaccess'];

    $role = $_POST['role'];

    $same = $_POST['same'];

    $accre = $_POST['accre'];
 
    $accpa = $_POST['accpa'];

    $genled = $_POST['genled'];

    $fixedass = $_POST['fixedass'];

    $purchaselevel = $_POST['purchaselevel'];

    $inventlevel = $_POST['inventlevel'];

    $mainlevel = $_POST['mainlevel'];

    $prolevel = $_POST['prolevel'];

    $sysadmin = $_POST['sysadmin'];

    $dbaccess = $_POST['dbaccess'];

    $dbjus = $_POST['dbjus'];

    $dbreq = $_POST['dbreq'];

    $usersign = $_POST['usersign'];

    $sitee = $_POST['sitee'];

    $user_check_query = "SELECT * FROM userform WHERE snumber='$snumber' OR phone='$phone' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
    if ($user['snumber'] === $snumber) {
        array_push($errors, "Staff number already exists");
    }

    if (empty($lname)) {
        array_push($errors, "Fill Last name");
    }
    if (empty($fname)) {
        array_push($errors, "Fill first name");
    }
    if (empty($statuss)) {
        array_push($errors, "Fill status");
    }
    if (empty($ptitle)) {
        array_push($errors, "Fill position title");
    }
    if (empty($dep)) {
        array_push($errors, "Fill department");
    }
    if (empty($snumber)) {
        array_push($errors, "Fill staff number");
    }
    if (empty($supervisorr)) {
        array_push($errors, "Fill direct supervisor");
    }
    if (empty($usersign)) {
        array_push($errors, "Fill user signature");
    }
}


    else {        
        $sql="INSERT INTO userform (lname,fname,statuss,ptitle,dep,snumber,extensionn,phone,supervisorr,expirydate,pdrivedep,pdrivelevel,coremail,homenet,internetaccess,accjust,prontoaccess,role,same,accre,accpa,genled,fixedass,purchaselevel,inventlevel,mainlevel,prolevel,sysadmin,dbaccess,dbjus,dbreq,usersign,sitee,statuz) VALUES 
        ('$lname','$fname','$statuss','$ptitle','$dep','$snumber','$extensionn','$phone','$supervisorr','$expirydate','$pdrivedep','$pdrivelevel','$coremail','$homenet','$internetaccess','$accjust','$prontoaccess','$role','$same','$accre','$accpa','$genled','$fixedass','$purchaselevel','$inventlevel','$mainlevel','$prolevel','$sysadmin','$dbaccess','$dbjus','$dbreq','$usersign','$sitee','Pending')";

        mysqli_query($db,$sql);

        array_push($success, "Successfully Added. Scroll down and logout!");

    }
}


?>