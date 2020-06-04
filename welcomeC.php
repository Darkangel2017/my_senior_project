<!DOCTYPE html>
<html>
<?php
session_start();
include ("sidebar.php");
include ("connection.php");
if(!$_SESSION['logged_in_client']){
  header("location:login.php");
}
?>
<head>
  <link href="welcomeccss.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="functions.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .fav{
    margin-left: 80px;
  }
  .rbtn{
    background-color: #ccc;
    color: black;
    border-color: blue;
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
.form-style-5 label {
  display: block;
  margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 input[type="password"],
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
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 input[type="password"],
.form-style-5 textarea:focus,
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
$uid=$_SESSION["userid"];
echo " <p href='#' class=dispname>Hello,&nbsp $name</p>";
echo " <a class=logout href='logout.php'>Logout</a> ";
echo '<a href="#" onclick="CafeSearch()">Search for Cafe / Resaurant</a>';
echo ' <a href="#" onclick="DisplayFavoriteCafes('.$uid.')" >Show Favorite Cafes</a>';
echo ' <a href="#" onclick="showReservationsUser('.$uid.')" >Show Reservations</a>';
?>
<!--   <a href="reserveC.php">Reserve</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a class=logout href="logout.php">Logout</a> -->
</div>

<div class="main" id="main1">
  <h2>Featured Cafes : </h2>
  <?php 
  $sql="SELECT * FROM cafe ORDER BY RAND() LIMIT 5";
    $result=mysqli_query($con,$sql);
    echo '<ul>';
     while($row = mysqli_fetch_array($result) ) {
     
echo '
    <li value="'.$row["cid"].'" onclick="DisplayCafeDetails(this.value)" >
      <img src="'.$row["thmb"].'" />
      <h3>'.$row["cname"].'</h3>
     
    </li>';

}
echo '</ul>';
  ?>
</div>
   
</body>
</html> 
