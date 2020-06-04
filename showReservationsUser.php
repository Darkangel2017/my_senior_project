<?php 
include("connection.php");
$userId=$_GET["id"];
$sql="SELECT DISTINCT r.rid, u.name, r.date,r.starttime,r.endtime,r.tid from reserve r,
user u, tables t, branch b, cafe c WHERE r.uid=u.uid AND 
r.tid=t.tid AND t.bid=b.bid AND u.uid=$userId";
echo '<div id="reservationDiv">
<table border=4	>
<tr><th>Name</th><th>Date</th><th>Start Time</th><th>End Time</th><th>Table ID</th><th>Delete Reservation</th></tr>';
$result=mysqli_query($con,$sql);
		 while($row = mysqli_fetch_array($result) ) {
		 		echo '<tr><td>'.$row["name"].'</td><td>'.$row["date"].'</td><td>'.$row["starttime"].'</td><td>'.$row["endtime"].'</td><td>'.$row["tid"].'</td><td><button  
      onclick="DeleteReservation('.$row["rid"].')">Delete</button></td></tr>';
		}

echo '
</table>
</div>';

?>