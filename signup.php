<?php
session_start();
include("connection.php");
?>
<html lang="en">
<head>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rescafe | Sign Up</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required="true"/>
                        </div>

                          <div class="form-group">
                               <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="username" required="true"/>
                        </div>
                        </div>
                          <div class="form-group">
                               <div class="form-group">
                            <input type="Number" class="form-input" name="phonenumber" id="phonenumber" placeholder="Phone Number" required="true"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" minlength="6" name="password" id="password" placeholder="Password" required="true"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" minlength="6" name="re_password" id="re_password" placeholder="Repeat your password" required="true"/>

                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required="true" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=$_POST["username"];
        $name=$_POST["name"];
		$password=$_POST["password"];
        $re_password=$_POST["re_password"];
        $phonenumber=$_POST["phonenumber"];
		$roleid=3;
	    $count=0;
        
        if($password!=$re_password){
            echo "Passwords don't match";
            return;
        }
                   
        if($count==0){ 
		    $query="INSERT INTO `user`(`uid`, `name`, `username`, `password`, `phonenb`, `roleid`, `token` ) VALUES (NULL, '$name','$username', '$password', '$phonenumber', '$roleid', 0)";
		    if (mysqli_query($con, $query)) {
    			echo "New record created successfully";
                header("location:login.php");
		    }
    		else {
    			echo "Error: " .  $query . "<br>" . mysqli_error($con);
    		}
		mysqli_close($con);
		}
    }
    ?>
</body>
</html>