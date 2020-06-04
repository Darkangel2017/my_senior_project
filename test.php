    <?php
    $apikey="c39060e246bdcedcc96ee94402398577";
$path="https://developers.zomato.com/api/v2.1/search?entity_type=city&q=tripoli%20&apikey=".$apikey;
   echo ' <button  
         onclick="showCafes(0)">Show Cafes</button>'	;
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
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var r=JSON.parse(this.responseText);

    	console.log(r.restaurants[1].restaurant.thumb); 
   }
  
  }
   };
    </script>