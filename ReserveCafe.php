<?php 
session_start();

include("connection.php");
$cid=$_SESSION['cafe_reserve'];
echo '<p><a href="#" onclick="DisplayCafeDetails('.$cid.')">Back</a></p>';

?> 
 <form   method=post  action="confirmReservation.php" class="form-style-5"  >
<br>
<label><b>Select the branch</b></label><select onchange="showTables(this.value)" required="true" name="branches" id="bran">
<option disabled selected value> -- select an option -- </option>
  <?php 

      $r = mysqli_query($con, "SELECT * FROM  branch WHERE cid='$cid'" ) ;
 while($row = mysqli_fetch_array($r) ) {
       echo ' <option value="'.$row["bid"].'">'.$row["location"].'</option>';
}
     
 	?>
  </select> 
<br>
			</select></p><br>
				<p>Choose Table in the selected Cafe<br><br>
					<select name="tID" id="tables" required="true">
					</select></p><br>
				<p>Choose Date: <input value= "<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" type=date name=date required="true"></p><br>
				<p>Choose StartTime: <input type=time name=Stime required="true"></p><br>
				<p>Choose EndTime: <input type=time name=Etime required="true"></p><br>
                <button type="submit" name="submit" value="Reserve">Reserve</button></form>
