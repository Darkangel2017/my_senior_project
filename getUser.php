<?php
include("connection.php");
session_start();
$userId=$_SESSION["userid"];
$id=$_GET["id"];//get the q parameter from URL
if($id==='*'){
$r = mysqli_query($con, "SELECT * FROM `user` where uid<>$userId" ) ;
echo "<TABLE border=4>";
      echo '<tr><th>Name</th> <th>UserName</th><th>Role</th><th>Delete</th></tr>';
 while($row = mysqli_fetch_array($r) ) {
 	if($row["roleid"]==="1")
 	$role="Developer";
 else if($row["roleid"]==="2")$role="Cafe Owner";
 else $role="Client";
      echo '<tr><td>'.$row["name"].'</td><td>'.$row["username"].'</td><td>'.$role.'</td><td><button  
      onclick="confirmDelete('.$row["uid"].')">Delete</button></td></tr>';
	  //echo $q;
 }  	
echo"</TABLE>";

}
else{
$r = mysqli_query($con, "SELECT * FROM `user` WHERE username like \"%$id%\"" ) ;
echo "<TABLE border=4>";
      echo '<tr><th>Name</th> <th>UserName</th><th>Delete</th></tr>';
 while($row = mysqli_fetch_array($r) ) {
      echo '<tr><td>'.$row["name"].'</td><td>'.$row["username"].'</td><td><button 
      onclick="confirmDelete('.$row["uid"].')">Delete</button></td></tr>';
	  //echo $q;
 }  	
echo"</TABLE>";
}
 mysqli_close($con);
 
?>