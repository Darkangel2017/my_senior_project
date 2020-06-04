<?php 
include("connection.php");
session_start();
ob_start();
?>
 <form method="post" class="form-style-5" action="<?php echo $_SERVER['PHP_SELF']; ?>"  style="border:1px solid #ccc">
  
    <h1>Add Owner</h1>
    <label for="name"><b>Name: </b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    <br>
<label for="username"><b>UserName: </b></label>

    <input type="text" placeholder="Enter username" name="username" required>
<br>
    <label for="psw"><b>Password: </b></label>
    <input type="password" minlength="6" placeholder="Enter Password" name="psw" required>
<br>
    <label for="psw-repeat"><b>Repeat Password: </b></label>
    <input type="password" minlength="6" placeholder="Repeat Password" name="psw-repeat" required>
<br>
<label for="phonenumber"><b>Phone Number: </b></label>
    <input type="Number" placeholder="Enter phone Number" name="phonenumber" required>
<br>
 <label for="cafe" ><b>Select The cafe managed :</b></label>
 <select  name="cafes" onchange="getBranches(this.value)">
 <option disabled selected value> -- select an option -- </option>
<?php 
  $q= "SELECT cname,cid FROM cafe";
  $r = mysqli_query($con,$q);
  while($row = mysqli_fetch_array($r) )
  echo '<option value="'.$row["cid"].'">'.$row["cname"].'</option>';
?>
</select> 
<br>
<label><b>Select the branch</b></label><select required="true" name="branches" id="bran"></select> 
<br><div class="clearfix">
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 
<?php
if(isset($_POST['submit'])){
		$name = $_POST["name"];
		$username = $_POST["username"];
		$password1 = $_POST["psw"];
		$password2 = $_POST["psw-repeat"];
		$phNum = $_POST["phonenumber"];
    $branchID=$_POST["branches"];
				if($password1 === $password2){
					$sql="INSERT INTO `user` (`uid`, `name`, `username`, `password`, `phonenb`, `roleid`) VALUES (NULL, '$name', '$username', '$password1', '$phNum', '2');";
					$result=mysqli_query($con,$sql);
				$manId=mysqli_insert_id($con);
			$addmanagersql="UPDATE branch  SET mid='{$manId}' WHERE bid='{$branchID}'";
			mysqli_query($con,$addmanagersql);
	$_SESSION['added']="Added Succesfully";
header("location: welcomeA.php");
				}
				else echo "passwords doesnt match!";
}
?>