<?php 
include("connection.php");
$fid=$_GET['id'];
$q="DELETE FROM `favorite` WHERE fid='$fid'";
mysqli_query($con,$q);
?>

</script>