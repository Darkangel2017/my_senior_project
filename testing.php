<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="submit">
</form>
<?php
	$con=  mysqli_connect("localhost","root","","senior");
	if(!$con) die("Error: "+mysqli_connect_error());
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
		$sql="select * from user where password='$password' 
		         AND username='$username'";
		$result=mysqli_query($con,$sql);
		$nbrows=mysqli_num_rows($result);
		         
		if ($nbrows == 1) {
			session_start();
			$res = mysqli_fetch_array($result);
			
			$_SESSION["username"]=$username;
			$_SESSION["name"]=$res["name"];
		
			if($res["roleid"]=="1"){	
			$_SESSION["userid"]=$res["uid"];
			$_SESSION["logged_in_admin"]=true;
			header("Location:welcomeA.php");
			}
			else if($res["roleid"]=="2"){
			$_SESSION["userid"]=$res["uid"];
			$_SESSION["logged_in_owner"] = true;		
			header("Location:welcomeB.php");
			}
			else {
				$_SESSION["userid"]=$res["uid"];
				$_SESSION["logged_in_client"] = true;
				header("Location:welcomeC.php");
			}
		}
		else echo "Username or Password is invalid";
		mysqli_close($con);
}
				?>
</body>
</html>