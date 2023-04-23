<?php include ("indexvalid.php")?>
<?php include ("conedit.php")?>
<?php
$db= mysqli_connect("localhost","root","","gsrproject");
$id = isset($_GET['id']) ? $_GET['id'] : '';
$_SESSION['aptid'] = $id;
$sql1 = "SELECT * FROM edituser where id='$id' ";
$result= mysqli_query($db,$sql1);
$row = mysqli_fetch_array($result);
$readonly = " readonly";

?>


<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="styles.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
        <img src="GSRR.jpg" alt="" >

        <header>I.T- New User Form</header>


        <form  method="post">
        <?php include ('success.php'); ?>

            <div class="">
                <div class="details personal">
                    <span class="title">User Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" id="lname" name="lname" value="<?php echo $row['lname']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" id="fname" name="fname" value="<?php echo $row['fname']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Status</label>
                            <input type="text" id="statuss" name="statuss" value="<?php echo $row['statuss']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Position title</label>
                            <input type="text" id="ptitle" name="ptitle" value="<?php echo $row['ptitle']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Department</label>
                            <input type="text" id="dep" name="dep" value="<?php echo $row['dep']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Staff Number</label>
                            <input type="text" id="snumber" name="snumber" value="<?php echo $row['snumber']; ?>" <?php echo $readonly; ?> >
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Extension</label>
                            <input type="text" id="extensionn" name="extensionn" value="<?php echo $row['extensionn']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Mobile Phone No</label>
                            <input type="number" id="phone" name="phone" value="<?php echo $row['phone']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Direct Supervisor</label>
                            <input type="text" id="supervisorr" name="supervisorr" value="<?php echo $row['supervisorr']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Account Expiry Date</label>
                            <input type="date" id="expirydate" name="expirydate" value="<?php echo $row['expirydate']; ?>" <?php echo $readonly; ?> >
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
            <div class="">
                <div class="details personal">
                    <span class="title">Network Resource And Access Required</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>P:\Department</label>
                            <input type="text" id="pdrivedep" name="pdrivedep" value="<?php echo $row['pdrivedep']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Level of Access of P:\Drive</label>
                            <input type="text" id="pdrivelevel" name="pdrivelevel" value="<?php echo $row['pdrivelevel']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Corporate Email Address</label>
                            <input type="text" id="coremail" name="coremail" value="<?php echo $row['coremail']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Home Internet Access</label>
                            <input type="text" id="homenet" name="homenet" value="<?php echo $row['homenet']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Internet Access</label>
                            <input type="text" id="internetaccess" name="internetaccess" value="<?php echo $row['internetaccess']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Justification</label>
                            <input type="text" id="accjust" name="accjust" value="<?php echo $row['accjust']; ?>" <?php echo $readonly; ?> >
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Pronto Access</span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Pronto Access</label>
                            <input type="text" id="prontoaccess" name="prontoaccess" value="<?php echo $row['prontoaccess']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Role</label>
                            <input type="text" id="role" name="role" value="<?php echo $row['role']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Same As User: (see supervisor)</label>
                            <input type="text" id="same" name="same" value=<?php echo $row['same']; ?> >
                        </div>

                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="">
                <div class="details address">
                    <span class="title">OR</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Account Receivable Level</label>
                            <input type="text" id="accre" name="accre" value="<?php echo $row['accre']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Account Payable Level</label>
                            <input type="text" id="accpa" name="accpa" value="<?php echo $row['accpa']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Genral Ledge Level</label>
                            <input type="text" id="genled" name="genled"  value="<?php echo $row['genled']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Fixed Assets Level</label>
                            <input type="text" id="fixedass" name="fixedass" value="<?php echo $row['fixedass']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Purchasing Level</label>
                            <input type="text" id="purchaselevel" name="purchaselevel" value="<?php echo $row['purchaselevel']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Inventory Level</label>
                            <input type="text" id="inventlevel" name="inventlevel" value="<?php echo $row['inventlevel']; ?>" <?php echo $readonly; ?> >
                        </div>
                    </div>
                </div>

                <div class="details family">

                    <div class="fields">
                        <div class="input-field">
                            <label>Maintenance Level</label>
                            <input type="text" id="mainlevel" name="mainlevel" value="<?php echo $row['mainlevel']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>Project Level</label>
                            <input type="text" id="prolevel" name="prolevel" value="<?php echo $row['prolevel']; ?>" <?php echo $readonly; ?> >
                        </div>

                        <div class="input-field">
                            <label>System Administration</label>
                            <input type="text" id="sysadmin" name="sysadmin" value="<?php echo $row['sysadmin']; ?>" <?php echo $readonly; ?> >
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                    </div>
                    <div class="">
                        <div class="details address">
                            <span class="title">Database Access</span>
        
                            <div class="fields">
                            <div class="input-field">
                            <label>Database Access</label>
                            <input type="text" id="dbaccess" name="dbaccess" value="<?php echo $row['dbaccess']; ?>" <?php echo $readonly; ?> >
                        </div>
        
                                <div class="input-field">
                                    <label>Justification</label>
                                    <input type="text" id="dbjus" name="dbjus" value="<?php echo $row['dbjus']; ?>" <?php echo $readonly; ?> >
                                </div>
        
                                <div class="input-field">
                                    <label>Databases Required</label>
                                    <input type="text" id="dbreq" name="dbreq" value="<?php echo $row['dbreq']; ?>" <?php echo $readonly; ?> >
                                </div>
                            </div>
        
                            <div class="buttons">
                                <div class="backBtn">
                                    <i class="uil uil-navigator"></i>
                                    <span class="btnText">Back</span>
                                </div>
                </div> 
                <div class="">
                    <div class="details address">
                        <span class="title">By signing below I the new user agree to the following terms:</span>
                        <span class="title"><h6>1. I have received, read and understood the "GSR Ghana IT Handbook".</h6></span>
                        <span class="title"><h6>2. I understand that any PCs, software and storage media provided to me by the company remains the property of the company.</h6></span>
                        <span class="title"><h6>3. I understand that the company data is proprietary and may not be duplicated or distributed without authorization.</h6></span>
                        <span class="title"><h6>4. I agree to abide by any security policies as may be revised by the company. IT Handbook"</h6></span>

    
                        <div class="fields">
                            <div class="input-field">
                                <label>User Signature</label>
                                <input type="text" id="usersign" name="usersign" value="<?php echo $row['usersign']; ?>" <?php echo $readonly; ?> >
                            </div>
    
                            <div class="input-field">
                                <label>Site</label>
                                <input type="text" id="sitee" name="sitee" value="<?php echo $row['sitee']; ?>" <?php echo $readonly; ?> >
                            </div>
    
                            <div class="input-field">
                              
                            </div>
                        </div>
    
                        <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
            </div>
            <div class="details personal">
                    <span class="title">Request Authorisation Details (Requires G3 level authorisation)</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Authorized By</label>
                            <input type="text" id="authorizedby" name="authorizedby" value=<?php echo $row['authorizedby']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Signature</label>
                            <input type="text" id="authsign" name="authsign" value=<?php echo $row['authsign']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Position</label>
                            <input type="text" id="authposition" name="authposition" value=<?php echo $row['authposition']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Telephone</label>
                            <input type="text" id="authtele" name="authtele" value=<?php echo $row['authtele']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Site</label>
                            <input type="text" id="authsite" name="authsite" value=<?php echo $row['authsite']; ?> >
                        </div>

                        <div class="input-field">
                            
                    </div>
                </div>

                
                    </div>
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    <div class="buttons">
                        
                <div class="">
                <div class="details personal">
                    <span class="title">IT Use Only</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Username System</label>
                            <input type="text" id="itusername" name="itusername" value=<?php echo $row['itusername']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Processed By</label>
                            <input type="text" id="proccessedby" name="proccessedby" value=<?php  echo $_SESSION['surnamee']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" id="ittdate" name="ittdate" value=<?php echo $row['ittdate']; ?> >
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Finance Use Only</span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Username Pronto</label>
                            <input type="text" id="pronusername" name="pronusername" value=<?php echo $row['pronusername']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Processed By</label>
                            <input type="text" id="proproccessed" name="proproccessed" value=<?php echo $row['proproccessed']; ?> >
                        </div>

                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" id="prontodate" name="prontodate" value=<?php echo $row['prontodate']; ?> >
                        </div>

                       
                    </div>

                    <div class="buttons">
                            <button class="sumbit" id="llogout" name="llogout" type="submit">
                                <span class="btnText">Logout</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                             <button class="sumbit" id="iitedit" name="iitedit" type="submit">
                                <span class="btnText">Edit</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                            
                            <button class="sumbit" id="submitt" name="submitt" type="submit">
                                <span class="btnText">Submit</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                </div> 
        </form>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>
