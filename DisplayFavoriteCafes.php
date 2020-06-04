<?php 
include("connection.php");
$uid=$_GET['id'];
$r="";
$q="SELECT * FROM favorite WHERE uid='$uid'";
$result=mysqli_query($con,$q);
	$nbrows=mysqli_num_rows($result);
	if($nbrows===0){
  		echo 'You Do not Have any Cafe in Favorite';
	}
	else{
		$r.="<ul>";
		while($rowa=mysqli_fetch_array($result)){
		$q='SELECT * FROM `cafe` WHERE cid ='.$rowa["cid"];
		$resulta=mysqli_query($con,$q);
		$row = mysqli_fetch_array($resulta);
		//while($row = mysqli_fetch_array($resulta) ) {
		$s = '<li value="'.$row["cid"].'" onclick="DisplayCafeDetails(this.value)" >
      	<img src="'.$row["thmb"].'" />
      	<h3>'.$row["cname"].'</h3></li>'; 
		$r.=$s;
   
//}

}
$r.= "</ul>";
echo $r;
}
?>