<?php
session_start();
unset($_SESSION['surnamee']);
header('Location: index.php')
?>