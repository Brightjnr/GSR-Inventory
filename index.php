<?php include ("indexvalid.php")?>

<?php
$db= mysqli_connect("localhost","root","","gsrproject");

$sql = "SELECT * FROM edituser WHERE statuz='Pending'";

$result= mysqli_query($db,$sql);

$countprop = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylees.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="logo">
        <img src="GSRR.jpg" alt="" >
    </div> 
    <div class="content">
      <form method="post">
        <div class="user-details">
          
        </div>
        <div class="gender-details">
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" id="userform" name="userform" value="IT New User">
        </div>
        <div class="button">
            <input type="submit" id="manager" name="manager" value="Manager Validation">
          </div>
          <div class="button">
            <input type="submit" id="itvalid" name="itvalid" value="IT Validation (<?php echo $countprop; ?> Pending)">
          </div>
          <div class="button">
            <input type="submit" id="find" name="find" value="Search User">
          </div>
      </form>
    </div>
  </div>

</body>
</html>
