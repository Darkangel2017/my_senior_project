<?php
include ("connection.php");
$cid=$_GET['id'];
$q="SELECT cname , location,bid  FROM cafe c, branch b WHERE c.cid=b.cid and c.cid=$cid";
$result=mysqli_query($con,$q);
		 while($row = mysqli_fetch_array($result) ) {
			echo '<option value="'.$row["bid"].'">'.$row["location"].'</option>';
					}
?>