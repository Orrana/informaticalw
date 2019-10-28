<?php
session_start();
$_SESSION['logout']=true;
header("location:index.php");
exit;

?>