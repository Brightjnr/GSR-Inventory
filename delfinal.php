<?php
$db = mysqli_connect('localhost','root','');

mysqli_select_db($db,'gsrproject');

$sql= "DELETE FROM finaltable WHERE ID='$_GET[id]'";

if (mysqli_query($db,$sql)){
    header("refresh:1; url=finaltab.php");

}
else {
    echo ("Not Deleted");
}
?>