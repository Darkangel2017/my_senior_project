<!DOCTYPE html>
<html>
<?php
session_start();
include ("sidebar.php");
include ("connection.php");
if(!$_SESSION['logged_in_owner']){
  header("location:login.php");
}
?>
<head>
 <script type="text/javascript" src="functions.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color: #ddd;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.main {
  width: auto;
  margin-left: 220px; 
  margin-right: 30px; 
  margin-top: 20px;
  background-color: white;
  padding-top:50px;
  padding-left:50px;
  padding-right:45px;
  padding-bottom: 45px; 
  height:auto;
  border-radius:1.5em;
  box-shadow:0px 11px 35px 2px rgba(0,  0, 0, 0.14);
  /* Same as the width of the sidenav */
}

.logout{
  position: fixed;
bottom: 0px;
width: initial;
}
.dispname{
  margin-left: 25px;
  position: fixed;
  top: 0px;
  margin-bottom: 50px;
  left: 0px;
  font-size: 14px;
  font-family: "Lato", sans-serif;
  color: white;

}


.form-style-5 label {
  display: block;
  margin-bottom: 8px;
}

.form-style-5 input[type="number"],
.form-style-5 select {
  font-family: Georgia, "Times New Roman", Times, serif;
  background: rgba(255,255,255,.1);
  border: none;
  border-radius: 4px;
  font-size: 15px;
  margin: 0;
  outline: 0;
  padding: 10px;
  width: 100%;
  box-sizing: border-box; 
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box; 
  background-color: #e8eeef;
  color:#8a97a0;
  -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}
.form-style-5 input[type="number"]:focus,
.form-style-5 select:focus{
  background: #d2d9dd;
}
.form-style-5 select{
  -webkit-appearance: menulist-button;
  height:35px;
}
.form-style-5 .number {
  background: #1abc9c;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 15px 15px 15px 0px;
}
.form-style-5 button[type="submit"],
.form-style-5 button[type="button"]
{
  position: relative;
  display: block;
  padding: 19px 39px 18px 39px;
  color: white;
  margin: 0 auto;
  background: #575614;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  width: 100%;
  border: 1px solid #43422B;
  border-width: 1px 1px 3px;
  margin-bottom: 10px;
}
.form-style-5 button[type="submit"]:hover,
.form-style-5 button[type="button"]:hover
{
  background: #5C5C26;
}



</style>

</head>
<body>

<div class="sidenav">
  <?php
$name=$_SESSION["name"];
echo " <p href='#' class=dispname>Hello , $name</p>";
echo " <a class=logout href='logout.php'>Logout</a> ";
echo ' <a href=#  onclick="showReservations('.$_SESSION["userid"].')">View Reservations</a>';
echo ' <a href=#  onclick="AddTables('.$_SESSION["userid"].')">Add Tables</a>';
echo ' <a href=#  onclick="showDeleteTables('.$_SESSION["userid"].')">Show/Remove Tables</a>';

echo ' <a href=#  onclick="showFeedback('.$_SESSION["userid"].')">See Feedbacks</a>';
echo "<style>.sidenav{
 background: linear-gradient(to bottom right, #333300 0%, #ff9900 100%);
}
}</style>";
?>
<!--   <a href="reserveC.php">Reserve</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a class=logout href="logout.php">Logout</a> -->
</div>

<div class="main" id="main1">

</div>
   
</body>
</html> 
