<?php
session_start();
if(!isset($_SESSION['loggedId'])){
    header("location:index.php");
    exit;
}
?>