<?php 
include("connection.php");
session_start();
?>
<p><b>Search for a user:</b></p>
<form class="search"> 
<span class>User Name : </span><input class="search" type="text" onkeyup="showUsers(this.value)">
</form>
<div id="TableHint">  the result will be shown here &nbsp <b>Search for (*) to display all</b></div>
