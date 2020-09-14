<?php
session_start();
$_SESSION['loggedId']= "";
session_destroy();
header("location:index.php");
?>