<?php 
include("connection.php");
$id=$_GET["id"];
$deleteFromReserve="DELETE  FROM `reserve`  WHERE uid=$id";
$deleteFromBranch="DELETE  FROM `branch` WHERE uid=$id";
$deleteFromFeedback="DELETE  FROM `feedback` WHERE uid=$id";
$deleteFromnotification="DELETE  FROM `notification` WHERE uid=$id";
$deleteFromUser="DELETE  FROM `user` WHERE uid=$id";
$deleteFromFavorite="DELETE FROM `favorite` WHERE uid=$id";
	mysqli_query($con,$deleteFromReserve);
	mysqli_query($con,$deleteFromFavorite);
	mysqli_query($con,$deleteFromnotification);
	mysqli_query($con,$deleteFromFeedback);
	mysqli_query($con,$deleteFromBranch);
	mysqli_query($con,$deleteFromUser);
echo "Deleted Succesfully";

?>