

<form method='get'>
<?PHP
include ("connection.php");
//check if the starting row variable was passed in the URL or not
if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  //we give the value of the starting row to 0 because nothing was found in URL
  $startrow = 0;
//otherwise we take the value from the URL
} else {
  $startrow = (int)$_GET['startrow'];
}
//this part goes after the checking of the $_GET var
$fetch = mysqli_query($con,"SELECT * FROM `user` LIMIT $startrow, $startnow+5")or
die(mysql_error());
   $num=Mysqli_num_rows($fetch);
        if($num>0)
        {
        echo "<table border=2>";
        echo "<tr><td>Name</td><td>Username</td><td>Password</td><td>Phone Number</td></tr>";
        for($i=0;$i<$num;$i++)
        {
        $row=mysqli_fetch_row($fetch);
        echo "<tr>";
        echo"<td>$row[0]</td>";
        echo"<td>$row[1]</td>";
        echo"<td>$row[2]</td>";
        echo"<td>$row[3]</td>";
        
        echo"</tr>";
        }//for
        echo"</table>";
        }
//now this is the link..
echo '<a href="#" onclick="deleteuser('.$startrow + 5.')">Next</a>';



//only print a "Previous" link if a "Next" was clicked
if ($prev >= 0)
    echo '<a href="#" onclick="deleteuser('.$startrow - 5.')">Previous</a>';
?startrow='.$prev.'
?>
?>