<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rescafe | Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsL/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsL/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorL/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorL/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssL/util.css">
	<link rel="stylesheet" type="text/css" href="cssL/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/cafe-restaurant-amsterdam-restaurantzaal-fa774.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="login100-form validate-form p-b-33 p-t-5">
					<div class="wrap-input100 validate-input" data-validate = "Enter username" >
						<input class="input100" type="text" name="username" placeholder="User name" required="true">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required="true">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button name="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
				<?php  
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
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendorL/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/bootstrap/js/popper.js"></script>
	<script src="vendorL/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/daterangepicker/moment.min.js"></script>
	<script src="vendorL/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>