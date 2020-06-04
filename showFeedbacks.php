<?php 
include("connection.php");
$managerId=$_GET["id"];
$cafeId="SELECT cid FROM branch WHERE mid=$managerId";
$result=mysqli_query($con,$cafeId);
$row = mysqli_fetch_array($result);
$q='SELECT f.description,f.date ,u.name FROM `feedback` f ,`cafe` c, `user` u WHERE u.uid=f.uid and f.cid=c.cid  and f.cid='.$row["cid"].'';
$result1=mysqli_query($con,$q);
		 echo '<table border=4> <tr><th>Name</th><th>Date</th><th>Description</th></tr>';
		 
		 while($row1 = mysqli_fetch_array($result1) ) {
		 	
		 		echo'<tr><td>'.$row1["name"].'</td><td>'.$row1["date"].'</td><td>'.$row1["description"].'</td></tr>';
		}
		echo '</table>';
	

?>