<?php 
include("connection.php");
$comment=$_GET['comment'];
$uid=$_GET['uid'];
$cid=$_GET['cid'];
$date=date("Y-m-d");
$q="INSERT INTO `feedback` VALUES (NULL,'$uid','$cid','$comment','$date')";
mysqli_query($con,$q);
?>