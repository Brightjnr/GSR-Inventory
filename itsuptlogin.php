<?php include ("itsuptvalid.php")?>

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
    <div class="title">NEW USER-VALIDATION</div>
    <div class="content">
      <form method="post">
      <?php include ('errors.php'); ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Surname</span>
            <input type="text" id="surnamee" name="surnamee" placeholder="Enter Surname" >
          </div>
        
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="passwordd" name="passwordd" placeholder="Enter your password" >
          </div>
          
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
          <input type="submit" id="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
