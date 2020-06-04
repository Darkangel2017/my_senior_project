<?php 
 
include("connection.php");
$managerId=$_GET["id"];
$sql="SELECT t.tid ,b.location ,t.capacity FROM `user` u, `tables` t, `branch` b WHERE u.uid=b.mid and t.bid=b.bid and u.uid='$managerId'";
echo '<div id="reservationDiv">
<table border=4	>
<tr><th>Table ID</th><th>Location</th><th>Capacity</th><th>Delete</th></tr>';
$result=mysqli_query($con,$sql);
		 while($row = mysqli_fetch_array($result) ) {
		 		echo '<tr><td>'.$row["tid"].'</td><td>'.$row["location"].'</td><td>'.$row["capacity"].'</td>
		 		<td><button onclick="DeleteTable('.$row["tid"].')">Delete</button></td></tr>';
		}

echo '
</table>
</div>';


?>