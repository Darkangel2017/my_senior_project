<?php 
include("connection.php");
$id=$_GET['id'];
$q = "select bid from branch where cid = '$id'";
$res=mysqli_query($con,$q);
while($row = mysqli_fetch_array($res)){
	$bid = $row['bid'];
	$q = "select tid from table where bid = '$bid'";
	$res=mysqli_query($con,$q);
	while($row = mysqli_fetch_array($res)){
		$tid = $row['tid'];
		$q = "DELETE from reserve where tid='$tid'";
		mysqli_query($con, $q);
	}
	$q = "DELETE from tables where bid='$bid'";
		mysqli_query($con, $q);
}
$q="DELETE FROM `branch` WHERE cid=$id";
mysqli_query($con,$q);
$qq="DELETE FROM `cafe` WHERE cid=$id";
mysqli_query($con,$qq);
echo 'Deleted Successfuly';
?>