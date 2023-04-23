<?php
session_start();
$success=array();

$db= mysqli_connect("localhost","root","","gsrproject");
if(isset($_POST['iitedit'])){
    $id = $_SESSION['aptid'];
    $lname = filter_input(INPUT_POST, 'lname');
    $fname = filter_input(INPUT_POST, 'fname');
    $statuss = filter_input(INPUT_POST, 'statuss');
    $ptitle = filter_input(INPUT_POST, 'ptitle');
    $dep = filter_input(INPUT_POST, 'dep');
    $snumber = filter_input(INPUT_POST, 'snumber');
    $exten = filter_input(INPUT_POST, 'extensionn');
    $phone = filter_input(INPUT_POST, 'phone');
    $supervisorr = filter_input(INPUT_POST, 'supervisorr');
    $expirydate = filter_input(INPUT_POST, 'expirydate');
    $pdrivedep = filter_input(INPUT_POST, 'pdrivedep');
    $pdrivelevel = filter_input(INPUT_POST, 'pdrivelevel');
    $coremail = filter_input(INPUT_POST, 'coremail');
    $homenet = filter_input(INPUT_POST, 'homenet');
    $internetaccess = filter_input(INPUT_POST, 'internetaccess');
    $accjust = filter_input(INPUT_POST, 'accjust');
    $prontoaccess = filter_input(INPUT_POST, 'prontoaccess');
    $role = filter_input(INPUT_POST, 'role');
    $same = filter_input(INPUT_POST, 'same');
    $accre = filter_input(INPUT_POST, 'accre');
    $accpa = filter_input(INPUT_POST, 'accpa');
    $genled = filter_input(INPUT_POST, 'genled');
    $fixedass = filter_input(INPUT_POST, 'fixedass');
    $purchaselevel = filter_input(INPUT_POST, 'purchaselevel');
    $inventlevel = filter_input(INPUT_POST, 'inventlevel');
    $mainlevel = filter_input(INPUT_POST, 'mainlevel');
    $prolevel = filter_input(INPUT_POST, 'prolevel');
    $sysadmin = filter_input(INPUT_POST, 'sysadmin');
    $dbaccess = filter_input(INPUT_POST, 'dbaccess');
    $dbjus = filter_input(INPUT_POST, 'dbjus');
    $dbreq = filter_input(INPUT_POST, 'dbreq');
    $usersign = filter_input(INPUT_POST, 'usersign');
    $sitee = filter_input(INPUT_POST, 'sitee');
    $authorizedby = filter_input(INPUT_POST, 'authorizedby');
    $authsign = filter_input(INPUT_POST, 'authsign');
    $authposition = filter_input(INPUT_POST, 'authposition');
    $authtele = filter_input(INPUT_POST, 'authtele');
    $authsite = filter_input(INPUT_POST, 'authsite');
    $itusername = filter_input(INPUT_POST, 'itusername');
    $proccessedby = filter_input(INPUT_POST, 'proccessedby');
    $ittdate = filter_input(INPUT_POST, 'ittdate');
    $prousername = filter_input(INPUT_POST, 'pronusername');
    $proproccessed = filter_input(INPUT_POST, 'proproccessed');
    $prontodate = filter_input(INPUT_POST, 'prontodate');

    $sql = "UPDATE edituser set lname = '$lname', fname = '$fname', statuss='$statuss', ptitle='$ptitle', dep='$dep', 
    snumber='$snumber', extensionn='$exten', phone='$phone', supervisorr='$supervisorr', expirydate='$expirydate', pdrivedep='$pdrivedep',
    pdrivelevel='$pdrivelevel', coremail='$coremail', homenet='$homenet', internetaccess='$internetaccess',
    accjust='$accjust', prontoaccess='$prontoaccess', role='$role', same='$same', accre='$accre', accpa='$accpa',
    genled='$genled', fixedass='$fixedass', purchaselevel='$purchaselevel', inventlevel='$inventlevel',
    mainlevel='$mainlevel', prolevel='$prolevel', sysadmin='$sysadmin', dbaccess='$dbaccess', dbjus='$dbjus',
    dbreq='$dbreq', usersign='$usersign', sitee='$sitee', authorizedby='$authorizedby', authsign='$authsign', authposition='$authposition',
    authtele='$authtele', authsite='$authsite', itusername='$itusername', proccessedby='$proccessedby', ittdate='$ittdate',
    pronusername='$prousername', proproccessed='$proproccessed', prontodate='$prontodate', statuz='Approved'
    WHERE id = '$id'";
    if (mysqli_query($db, $sql)){
    
        header("refresh:0.04; url=ittable.php");
    }   
}


if(isset($_POST['submitt'])){
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

    $authorizedby = $_POST['authorizedby'];

    $authsign = $_POST['authsign'];

    $authposition = $_POST['authposition'];

    $authtele = $_POST['authtele'];

    $authsite = $_POST['authsite'];

    $itusername = $_POST['itusername'];

    $proccessedby = $_POST['proccessedby'];

    $ittdate = $_POST['ittdate'];

    $pronusername = $_POST['pronusername'];

    $proproccessed = $_POST['proproccessed'];

    $prontodate = $_POST['prontodate'];


    if (empty($lname)) {
        array_push($errors, "Fill Last name");
    }
    if (empty($fname)) {
        array_push($errors, "Fill first name");
    }

 
    else {        
        $sql="INSERT INTO finaltable (lname,fname,statuss,ptitle,dep,snumber,extensionn,phone,supervisorr,expirydate,pdrivedep,pdrivelevel,coremail,homenet,internetaccess,accjust,prontoaccess,role,same,accre,accpa,genled,fixedass,purchaselevel,inventlevel,mainlevel,prolevel,sysadmin,dbaccess,dbjus,dbreq,
        usersign,sitee,authorizedby,authsign,authposition,authtele,authsite, itusername,proccessedby,ittdate,pronusername,proproccessed,prontodate,statuz) VALUES 
        ('$lname','$fname','$statuss','$ptitle','$dep','$snumber','$extensionn','$phone','$supervisorr','$expirydate','$pdrivedep','$pdrivelevel','$coremail','$homenet','$internetaccess','$accjust','$prontoaccess','$role','$same','$accre','$accpa','$genled','$fixedass','$purchaselevel','$inventlevel','$mainlevel','$prolevel','$sysadmin','$dbaccess','$dbjus','$dbreq',
        '$usersign','$sitee','$authorizedby','$authsign','$authposition','$authtele','$authsite','$itusername','$proccessedby','$ittdate','$pronusername','$proproccessed','$prontodate','Approved')";

        mysqli_query($db,$sql);

        array_push($success, "Successfully Added. Scroll down and logout!");

    }
}
?>