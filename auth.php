<?php
session_start();
$userId=$_REQUEST['userId'];
$userPassword=$_REQUEST['userPassword'];

if(trim($userId)=='' || empty($userId)){
    header('location:index.php?err=1');
    exit;
}
if(trim($userPassword)=='' || empty($userPassword)){
    header('location:index.php?err=2');
    exit;
}
include 'include/db.php';
$stmt=$conn->prepare("SELECT * FROM USERTABLE where USERID=:userId and PASS=:userPassword");
$stmt->bindParam(":userId",$userId);
$stmt->bindParam(":userPassword",$userPassword);
$stmt->execute();
$count= $stmt->rowCount();
if($count==1){
    $_SESSION['loggedId']=$userId;
    header("location:home.php");
}
else{
    header("location:index.php?err=3");
    exit;
}
?>