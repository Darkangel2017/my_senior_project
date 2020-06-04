    <?php
    $apikey="c39060e246bdcedcc96ee94402398577";
$path="https://developers.zomato.com/api/v2.1/search?entity_type=city&q=tripoli%20&apikey=".$apikey;
   echo ' <button  
         onclick="showCafes(80)">Show Cafes</button>'	;
    ?>
    <div id="cafes">
     
    </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
    	function showCafes(str){
     var xhttp;
  xhttp = new XMLHttpRequest();
  console.log(str);
  xhttp.open("GET","https://developers.zomato.com/api/v2.1/search?entity_type=city&q=tripoli&start="+str+"&count=20&apikey=c39060e246bdcedcc96ee94402398577" , true);
  xhttp.send();
  var restaurants="";
  var names="";
  var locations="";
  var menu_urls="";
  var thumbs="";
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var r=JSON.parse(this.responseText);
    	console.log(r.restaurants.length);
    	for (var i = 0; i < 20; i++) {
    	// console.log(r.restaurants[i].restaurant.location.address);
   //  document.getElementById("cafes").innerHTML += r.restaurants[i].restaurant.name;
     names+=r.restaurants[i].restaurant.name+"||";
     locations+=r.restaurants[i].restaurant.location.address +"||"
     menu_urls+= r.restaurants[i].restaurant.menu_url+"||";
     thumbs+=r.restaurants[i].restaurant.thumb+"||";
     // restaurants+=r.restaurants[i].restaurant.name+"||"+ r.restaurants[i].restaurant.location.address +"||"+
     // r.restaurants[i].restaurant.menu_url+"||"+r.restaurants[i].restaurant.thumb+"|||";
      }
  document.getElementById("cafes").innerHTML += '<form id="rests" action="addFromApi.php" method="post"><input type="hidden" name="names" value="'+names+'"><input type="hidden" name="locations" value="'+locations+'"><input type="hidden" name="menu_urls" value="'+menu_urls+'"><input type="hidden" name="thumbs" value="'+thumbs+'"></form>';
document.getElementById("rests").submit();
    // var rest ={
    //   name :"HELLO"
    //  };

       // get cafe menu r.restaurants[i].restaurant.menu_url
       //get cafe name r.restaurants[i].restaurant.name
       //get cafe location r.restaurants[i].restaurant.location.address
    // $.post("addFromApi.php", rest);
    //  window.location.href="addFromApi.php";
   }
  
  }
   };

    </script>
