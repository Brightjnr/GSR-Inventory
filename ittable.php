<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Quicksand:wght@500;600&display=swap');

body {
    
    color: #0C1618;
    font-family: 'Quicksand', sans-serif;
    font-weight: 500;
    margin: 0;
    display: flex;
    justify-content: center;
    line-height: 1.5em;
}

header {
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 20px 35px;
}

h1 {
    font-family: 'Fredoka One', cursive;
    margin: 35px 0 65px;
    padding: 0;
    font-size: 4em;
    font-weight: 400;
    z-index: 1;
}

h2 {
    font-family: 'Fredoka One', cursive;
    letter-spacing: 0.1em;
    margin: 0 0 35px;
    padding: 0;
    font-size: 6em;
    font-weight: 400;
}

main {
    background-color: #d8e2dc;
    border-radius: 45px 45px 45px 45px;
    box-shadow: 0 5px 10px 0 rgba(145, 145, 145, 0.1);
    margin: 35px 0 35px;
}

section {
    font-size: 14px;
    border: 1px rgb(255, 255, 255) solid;
    background-color: rgb(255, 255, 255);
    padding: 10px 35px;
    margin: 5px 5px 0;
    padding: 5px 35px 10px;
    border-radius: 25px 25px 0 0;
}

h3 {
    font-family: 'Fredoka One', cursive;
    font-size: 18px;
    margin: 25px 0 10px;
    font-weight: 600;
}

ul {
    padding: 0;
    list-style: none;
}

label {
    font-size: 14px;
}

.id {
    width: 100%;
    box-sizing: border-box;
    border-style: none none solid none;
    border-bottom-color: #D1AC00;
    border-bottom-width: 1px;
    height: 35px;
    margin: 0 0 25px;
    font-size: 14px;
}

.id:focus {
    outline: none;
}

.btn {
    background-color: #f59700;
    border-radius: 0 0 41px 41px;
    text-align: center;
    margin: 0 5px 5px;
}

.btnsubmit {
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 0.em;
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    display: inline-block;
    text-align: center;
    padding: 25px;
    box-sizing: border-box;
    width: 100%;
    letter-spacing: 0.1em;
}

.vegosszeg {
    margin: 35px 0 10px;
    display: flex;
    justify-content: space-between;
}

.vegosszeg h3, .vegosszeg p {
    margin: 0;
    vertical-align: bottom;
    font-size: 16px;
}

.megrendelesbcg {
    display: none;
    background-color: rgba(0, 0, 0, 0.24);
    position: fixed;
    width: 100%;
    height: 100%;
    justify-content: center;
    align-items: center;
}




</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Quicksand:wght@500;600&display=swap');

body {
    
    color: #0C1618;
    background-image: url("data:image/jpeg;base64,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");
    font-family: 'Quicksand', sans-serif;
    font-weight: 500;
    margin: 0;
    display: flex;
    justify-content: center;
    line-height: 1.5em;
}

header {
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 20px 35px;
}

h1 {
    font-family: 'Fredoka One', cursive;
    margin: 35px 0 65px;
    padding: 0;
    font-size: 4em;
    font-weight: 400;
    z-index: 1;
}

h2 {
    font-family: 'Fredoka One', cursive;
    letter-spacing: 0.1em;
    margin: 0 0 35px;
    padding: 0;
    font-size: 6em;
    font-weight: 400;
}

main {
    background-color: #d8e2dc;
    border-radius: 45px 45px 45px 45px;
    box-shadow: 0 5px 10px 0 rgba(145, 145, 145, 0.1);
    margin: 35px 0 35px;
}

section {
    font-size: 14px;
    border: 1px rgb(255, 255, 255) solid;
    background-color: rgb(255, 255, 255);
    padding: 10px 35px;
    margin: 5px 5px 0;
    padding: 5px 35px 10px;
    border-radius: 25px 25px 0 0;
}

h3 {
    font-family: 'Fredoka One', cursive;
    font-size: 18px;
    margin: 25px 0 10px;
    font-weight: 600;
}

ul {
    padding: 0;
    list-style: none;
}

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}


table {
  max-width: 960px;
  margin: 10px auto;
}

caption {
  font-size: 1.6em;
  font-weight: 400;
  padding: 10px 0;
}

thead th {
  font-weight: 400;
  background: #8a97a0;
  color: #FFF;
}

tr {
  background: #f4f7f8;
  border-bottom: 1px solid #FFF;
  margin-bottom: 5px;
}

tr:nth-child(even) {
  background: #e8eeef;
}

th, td {
  text-align: left;
  padding: 20px;
  font-weight: 300;
}

tfoot tr {
  background: none;
}

tfoot td {
  padding: 10px 2px;
  font-size: 0.8em;
  font-style: italic;
  color: #8a97a0;
}




</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    
    <link rel="stylesheet" href="./main.css">

    
</head>
<body>


    
    <main>

        <header>
            <h1>All Employee</h1>
            <h2>Form</h2>
        </header>
    
        
        <section>
            <div class="order">
                <form id="order" action="#">
                    <ul>

                        <li class="listtitle">
                            <h3>Check Details</h3>
            <table border=1 cellpadding=1 cellspacing=1>
      <thead>
        <tr>
        <th scope="col">#</th>
          <th scope="col">Last Name</th>
          <th scope="col">First Name</th>
          <th scope="col">Department</th>
          <th scope="col">Position</th>
          <th scope="col">Status</th>
          <th scope="col">Clear</th> 
          <th scope="col">Edit</th> 
 
        </tr>
      </thead>
      <tbody>
        <?php
       $db = mysqli_connect('localhost','root','');

       mysqli_select_db($db,'gsrproject');

       $sql= "SELECT * FROM edituser";

       $records = mysqli_query($db,$sql);

       while ($row = mysqli_fetch_array($records)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['lname']."</td>";
        echo "<td>".$row['fname']."</td>";
        echo "<td>".$row['dep']."</td>";
        echo "<td>".$row['ptitle']."</td>";
        echo "<td>".$row['statuz']."</td>";
        echo "<td><a href=delete.php?id=".$row['id'].">Delete</a></td>";
        echo "<td><a href=itonly.php?id=".$row['id'].">Edit</a></td>";

        }
        ?>
      </tbody>
    </table>
   



        
                        
                </form>
            </div>
        </section>
        <div class="btn">
            
            <a href="" class="btnsubmit" ></a>

        </div>
        

    </main>

<script src="./practice.js"></script>

</body>
</html>