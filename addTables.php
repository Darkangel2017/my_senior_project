<?php 
include("connection.php");
session_start();
$uid=$_GET['id'];
$q="SELECT * FROM branch WHERE mid='$uid'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
?>
<body>
	<form method="post" action="confirmadd.php" class="form-style-5">
		<br>
<label>Select the branch :</label>
<select id="bran" name="branches" required="true" onfocus="getBranches('<?php echo $row['cid'];?>')">
	  <option  selected disabled>--- Select option ---</option>

</select><br>
	<label>Number of tables :</label><input type="number" name="tables"/>
	<br><label>capacity of tables :</label><input type="number" name="capacity"/>
	<br>
	<button type="submit">insert </button>
	</form>
</body>