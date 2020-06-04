<?php 
include ("connection.php");
$reserveId=$_GET["id"];
$q="DELETE FROM `reserve` WHERE rid=$reserveId";

if(mysqli_query($con,$q)){
	echo "Deleted Succesfully";
}

?>