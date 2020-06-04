<?php 
include("connection.php");
session_start();
print_r($_POST);
print_r($_SESSION);
$nbOfTables=$_POST['tables'];
$bid=$_POST['branches'];
$capacity=$_POST['capacity'];
for ($i=0; $i <$nbOfTables ; $i++) { 
$q="INSERT INTO `tables` VALUES (NULL,'$bid','$capacity')";
	mysqli_query($con, $q);
}
?>