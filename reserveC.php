<!DOCTYPE html>
<?php
include 'sidebar.php';
?>
<style type="text/css">

body{
font-family: "Lato", sans-serif;
	background-color: #ddd;
}	

.all{
  width: auto;
  margin-left: 220px; 
  margin-right: 30px; 
  margin-top: 20px;
  background-color: white;
  padding-top:50px;
  padding-left:50px;
  padding-right:45px;
  padding-bottom: 45px; 
  height:auto;
  border-radius:1.5em;
  box-shadow:0px 11px 35px 2px rgba(0,  0, 0, 0.14);
  /* Same as the width of the sidenav */
}


</style>
<html>
    <head>
       
        <title>Welcome To Rescafe | Reserve Cafe</title>
       
		
    </head>
    <body>
        <div class="all">
            <div class="log">
                <h1 id="H1logo"></h1>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">							
				<p>Choose Cafe: <br><br><select id="drp" onchange="showTables(this.value)">
				<?php
					$query= "SELECT cID, name FROM `cafe`";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)) {
						echo "<option value=".$row['cID'].">" . $row['name'] . "</option>";
					}
				?>
				</select></p><br>
				<p>Choose Table in the selected Cafe<br><br>
					<select name="tID" id="tt">
						<script>showTables(document.getElementById("drp").value)</script>
					</select></p><br>
				<p>Choose Date: <input type=date name=date></p><br>
				<p>Choose StartTime: <input type=time name=Stime></p><br>
				<p>Choose EndTime: <input type=time name=Etime></p><br>
                <input type="submit" name="submit" value="Reserve"/></form>
            </div>

        </div>
<div class="sidenav">

  <a class=logout href="#">Logout</a>
</div>
    </body>
</html>

<?php
	if (isset($_POST['submit'])) {
		session_start();
		$uID;
		$username = $_SESSION["username"];
		if(isset($username)){
			$conn=  mysqli_connect("localhost","root","","rescafe");
			$sql="SELECT uID FROM `user` WHERE username= '$username';";
			$result=mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result);
			$uID = $row['uID'];
			}
		$tID = $_POST["tID"];
		$Date = $_POST["date"];
		$STime = $_POST["Stime"];
		$ETime = $_POST["Etime"];
		$ok = false;
		$reservable = true;
		$starttime;
		$endtime;
		if(isset($tID) && isset($Date) && isset($STime) && isset($ETime)){
			if(!empty($tID) && !empty($Date) && !empty($STime) && !empty($ETime)){
				$ok = true;
			}else echo"All fields required!";
		}else echo"invaild input data!";
		
		if($ok){
			$conn=  mysqli_connect("localhost","root","","rescafe");
			$query = "SELECT * FROM `reserve` WHERE tID='$tID' AND date='$Date';";
			$result=mysqli_query($conn, $query);
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
		}
		else $reservable = false;
		if($reservable){
			$conn=  mysqli_connect("localhost", "root", "", "rescafe");
			$query="INSERT INTO `rescafe`.`reserve` (`rID`, `uID`, `tID`, `date`, `starttime`, `endtime`) VALUES (NULL, '$uID', '$tID', '$Date', '$STime', '$ETime');";
			if(!$result=mysqli_query($conn, $query)) echo mysqli_error($conn);
			echo "Reserved Successfully";			
		}
	}
?>


