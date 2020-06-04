<?php 
include("connection.php");
$cid=$_GET['cid'];
$uid=$_GET['uid'];
$q="INSERT INTO favorite VALUES (NULL,'$uid','$cid')";
mysqli_query($con,$q);
?>