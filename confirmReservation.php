<?php 
include("connection.php");
session_start();
// print_r($_SESSION);
// print_r($_POST);
	if (isset($_POST['submit'])) {
	
		$uID=$_SESSION["userid"];
		$tID = $_POST["tID"];
		$Date = $_POST["date"];
		$STime = $_POST["Stime"];
		$ETime = $_POST["Etime"];
		$reservable = true;
		$starttime;
		$endtime;
			$query = "SELECT * FROM `reserve` WHERE tid='$tID' AND date='$Date';";
			$result=mysqli_query($con, $query);
			$nbrows=mysqli_num_rows($result);
			if ($nbrows > 0){
	

				while($row = mysqli_fetch_array($result)){
					$starttime = strtotime($row['starttime']);
					$endtime = strtotime($row['endtime']);
					$s=strtotime($STime);
					$e=strtotime($ETime);
					if((($e >= $starttime) && ($e <= $endtime))
					|| (($s >= $starttime) && ($s <= $endtime)))
					{
						echo "This table is reserved at this time";
						$reservable = false;
					
					}
			}
		}
		if($reservable){
			$query="INSERT INTO `reserve` VALUES (NULL, '$uID', '$tID', '$Date', '$STime', '$ETime');";
			if(!mysqli_query($con, $query)) echo mysqli_error($con);
			 header("location: welcomeC.php");
		}
	}



?>