<?php 
	session_start();
	include ("connection.php");
	$cid=$_GET['id'];
	$uid= $_SESSION["userid"];
 	$sql="SELECT * FROM cafe WHERE cid='$cid'";
 	$ssql="SELECT * FROM branch WHERE cid='$cid'";
 	$bresult=mysqli_query($con,$ssql);
    $result=mysqli_query($con,$sql);
    $brow=mysqli_fetch_array($bresult);
    $row = mysqli_fetch_array($result);
    $sssql="SELECT * FROM favorite WHERE uid='$uid' and cid='$cid'";
    $fresult=mysqli_query($con,$sssql);
	$_SESSION['cafe_reserve']=$cid;
	$nbrows=mysqli_num_rows($fresult);
	
echo '<div id="cafe">

   <h3>'.$row["cname"].'</h3>
   <img src="'.$row["thmb"].'" id="thumbimg"/>
   <p>View Menu on Zomato <a href="'.$row["menupic"].'" target="_blank">(Click Here)</a></p>
   <p>Location : '.$brow["location"].'</p>
   <div id="feedback">
<form action="#">
<textarea name="comment" id="comment"></textarea>
<button class=rbtn name="addcomments" onclick="addcomment(comment.value,'.$cid.','.$uid.')">Add Comment</button>
 </form>
 </div>
   <button class=rbtn value="'.$brow["bid"].'"  onclick="ReserveCafe(this.value,'.$row['cid'].')">Reserve</button>';
if ($nbrows == 1) {
	$frow=mysqli_fetch_array($fresult);   $_SESSION['favorite_cafe_id']=$frow["fid"];
		echo '<img class=fav style="left=5px" onclick="RemoveFromFavorite('.$frow["fid"].')" id="imgdisp" src="FavoriteOn.png"';	
		}
		else{
			echo '<img class=fav style="left=5px" onclick="AddToFavorite('.$cid.','.$uid.')" id="imgdisp" src="FavoriteOff.png"';
		}

echo '</div>';
?>