<?php 
include("connection.php");
$cafeId=$_GET['id'];
$q="SELECT * FROM `branch` WHERE cid='$cafeId'";
$result=mysqli_query($con,$q);

 while($row = mysqli_fetch_array($result) ) {
 
		 		echo '<option value="'.$row['bid'].'">'.$row['location'].'</option>';
		}

?>