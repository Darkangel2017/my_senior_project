<?php 
include("connection.php");
// $restaurant=explode("|||", $_POST['q']);
// for ($i=0; $i < 20; $i++) { 
// $thing=explode("||", $restaurant[$i]);
// $name=$thing[0];
// $location=$thing[1];
// $menu_url=$thing[2];
// if(!isset($thing[3]))$thumb="NoThumbPhoto.jpg";
// else $thumb=$thing[3];
$names=explode("||",$_POST['names']);
$locations=explode("||",$_POST['locations']);
$menu_urls=explode("||",$_POST['menu_urls']);
$thumbs=explode("||",$_POST['thumbs']);
for ($i=0; $i <20 ; $i++) { 
	$name=$names[$i];
	$location=$locations[$i];
	$menu_url=$menu_urls[$i];
   if($thumbs[$i]==="")$thumb="NoThumbPhoto.jpg";
   else $thumb=$thumbs[$i];

$sql="INSERT INTO `cafe` VALUES (NULL,'$name','$menu_url','$thumb')";
	mysqli_query($con,$sql);
$lastid = mysqli_insert_id($con); 
$sql2="INSERT INTO `branch` VALUES (NULL,'$lastid','$location',0)";	
		mysqli_query($con,$sql2);
	}


?>