<?php
include("connection.php");
$name=$_GET['id'];
$q="SELECT * FROM `cafe` WHERE cname like  \"%$name%\"";
$result=mysqli_query($con,$q);
echo '<ul>';
    while($row = mysqli_fetch_array($result) ) {
     
echo '
    <li  >
      <h3>'.$row["cname"].'</h3>
     <button value="'.$row["cid"].'" onclick="AdminDeleteCafe(this.value)">Delete</button>
    </li>';

}
echo '</ul>';
?>