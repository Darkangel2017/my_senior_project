<?php
include ("connection.php");
$bid=$_GET['id'];
$q="SELECT *  FROM tables WHERE bid='$bid'";
$result=mysqli_query($con,$q);

		 while($row = mysqli_fetch_array($result) ) {
			echo '<option value="'.$row["tid"].'"> Table Number : '.$row["tid"].', contains: '.$row["capacity"].'</option>';
					}

?>