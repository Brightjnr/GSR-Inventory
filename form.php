<?php include ("userformvalidation.php")?>
<?php include ("indexvalid.php")?>
<?php 
if(empty($_SESSION['staffno']) || $_SESSION['staffno'] == ''){
    header("Location: login.php");
    die();
}

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
    <style>
.error {
    width: 92%; 
    color: rgb(0, 0, 0);
    padding: 10px;
    border: 1px solid #ad9444;
    background: rgba(255, 34, 34, 0.933);
  }
  .required {
  color: red;
}
 
</style>
</head>
<body>
    <div class="container">
        <img src="GSRR.jpg" alt="" >

        <header>I.T- New User Form</header>


        <form method="post">
        <?php include ('success.php'); ?>

        <?php include ('errors.php'); ?>


            <div class="">
                <div class="details personal">
                    <span class="title">User Details</span>

                    <div class="fields">
                        <div class="input-field" >
                            <label>Last Name <span class="required">*</span></label>
                            <input type="text" id="lname" name="lname" placeholder="Enter your last name" >
                        </div>

                        <div class="input-field">
                            <label>First Name <span class="required">*</span></label>
                            <input type="text" id="fname" name="fname" placeholder="Enter your first name" >
                        </div>

                        <div class="input-field">
                            <label>Status<span class="required">*</span></label>
                            <select id="statuss" name="statuss">
                                <option ></option>
                                <option>Regular</option>
                                <option>Contractor</option>
                                <option>Casual</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Position Title <span class="required">*</span></label>
                            <input type="text" id="ptitle" name="ptitle" placeholder="Enter position title" >
                        </div>

                        <div class="input-field">
                            <label>Department</label>
                            <input type="text" id="dep" name="dep" value="<?php echo $row['dep']; ?>" >
                        </div>

                        <div class="input-field">
                            <label>Staff Number <span class="required">*</span></label>
                            <input type="text" id="snumber" name="snumber" placeholder="Enter your staff number" >
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Extension</label>
                            <select id="extensionn" name="extensionn">
                                <option ></option>
                                <option>Office</option>
                                <option>Home</option>
                                <option>None</option>

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Mobile Phone No</label>
                            <input type="number" id="phone" name="phone" placeholder="Enter phone number" >
                        </div>

                        <div class="input-field">
                            <label>Direct Supervisor<span class="required">*</span></label>
                            <input type="text" id="supervisorr" name="supervisorr" placeholder="Enter supervisor name" >
                        </div>

                        <div class="input-field">
                            <label>Account Expiry Date</label>
                            <input type="date" id="expirydate" name="expirydate" placeholder="Enter expiry date" >
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
                            <input type="text" id="pdrivedep" name="pdrivedep" placeholder="P drive access" >
                        </div>

                        <div class="input-field">
                            <label>Level of Access of P:\Drive</label>
                            <select id="pdrivelevel" name="pdrivelevel" >
                                <option ></option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>All levels</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Corporate Email Address</label>
                            <select id="coremail" name="coremail" >
                                <option ></option>
                                <option>External</option>
                                <option>Internal</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Home Internet Access</label>
                            <select id="homenet" name="homenet">
                                <option ></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Internet Access</label>
                            <select id="internetaccess" name="internetaccess">
                                <option ></option>
                                <option>Yes</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Justification</label>
                            <input type="text" id="accjust" name="accjust" placeholder="Enter 'YES' why?" >
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Pronto Access</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Pronto Access</label>
                            <select id="prontoaccess" name="prontoaccess" >
                                <option >Select option</option>
                                <option>Yes</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Role</label>
                            <input type="text" id="role" name="role" placeholder="Role" >
                        </div>

                        <div class="input-field">
                            <label>Same As User: (see supervisor)</label>
                            <input type="text" id="same" name="same" placeholder="Enter issued authority" >
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
                            <input type="text" id="accre" name="accre" placeholder="Receivable level" >
                        </div>

                        <div class="input-field">
                            <label>Account Payable Level</label>
                            <input type="text" id="accpa" name="accpa"  placeholder="Payable Level" >
                        </div>

                        <div class="input-field">
                            <label>Genral Ledge Level</label>
                            <input type="text" id="genled" name="genled"  placeholder="Genral Ledge Level" >
                        </div>

                        <div class="input-field">
                            <label>Fixed Assets Level</label>
                            <input type="text" id="fixedass" name="fixedass" placeholder="Fixed Assets Level" >
                        </div>

                        <div class="input-field">
                            <label>Purchasing Level</label>
                            <input type="text" id="purchaselevel" name="purchaselevel" placeholder="Purchasing Level" >
                        </div>

                        <div class="input-field">
                            <label>Inventory Level</label>
                            <input type="text" id="inventlevel" name="inventlevel" placeholder="Inventory Level" >
                        </div>
                    </div>
                </div>

                <div class="details family">

                    <div class="fields">
                        <div class="input-field">
                            <label>Maintenance Level</label>
                            <input type="text" id="mainlevel" name="mainlevel" placeholder="Maintenance Level" >
                        </div>

                        <div class="input-field">
                            <label>Project Level</label>
                            <input type="text" id="prolevel" name="prolevel" placeholder="Project Level" >
                        </div>

                        <div class="input-field">
                            <label>System Administration</label>
                            <input type="text" id="sysadmin" name="sysadmin" placeholder="System Administration" >
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
                                    <select id="dbaccess" name="dbaccess">
                                        <option >Select option</option>
                                        <option>Yes</option>
                                        <option>NO</option>
                                    </select>
                                </div>
        
                                <div class="input-field">
                                    <label>Justification</label>
                                    <input type="text" id="dbjus" name="dbjus" placeholder="Justification" >
                                </div>
        
                                <div class="input-field">
                                    <label>Databases Required</label>
                                    <input type="text" id="dbreq" name="dbreq" placeholder="Databases Required" >
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
                                <label>User Signature<span class="required">*</span></label>
                                <input type="text" id="usersign" name="usersign" placeholder="Enter your initials" >
                            </div>
    
                            <div class="input-field">
                                <label>Site</label>
                                <select id="sitee" name="sitee">
                                    <option ></option>
                                    <option>Wassa</option>
                                    <option>Benson/Mpohor</option>
                                </select>
                            </div>
    
                            <div class="input-field">
                               
                            </div>
                        </div>
    
                        <div class="buttons">
                        <button class="sumbit" id="logout" name="logout" type="submit">
                                <span class="btnText">Logout</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                            
                            <button class="sumbit" id="submit" name="submit" type="submit">
                                <span class="btnText">Submit</span>
                                <i class="uil uil-navigator"></i>
                            </button>
            </div>
        </form>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>
