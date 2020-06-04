<?php 
include('connection.php');
$tid=$_GET['id'];
$q="DELETE FROM `tables` WHERE tid='$tid'";
mysqli_query($con,$q);
echo 'Deleted Successfully';
?>