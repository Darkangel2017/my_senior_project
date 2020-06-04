 
//Admin Part 

 function confirmDelete (str) {
  var xhttp;       
  
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "userconfirmdelete.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};
  function getBranches (str) {
  var xhttp;       
  
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "getBranches.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bran").innerHTML = this.responseText;
    }
  }
};

 function addowner(){
  var xhttp;   
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "owneradd.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }

};

 function deleteuser(){
  var xhttp;   
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "deleteuser.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }

};

function showUsers(str) {
  var xhttp;       
  if (str == "") {
    document.getElementById("TableHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "getUser.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("TableHint").innerHTML = this.responseText;
    }
  }
};


 function AdminCafeSearch(){
  var xhttp;   
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "AdmincafeSearch.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }

};
function AdminshowCafeSearch(str) {
  var xhttp;       
  if (str == "") {
    document.getElementById("dispCafe").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "AdmingetCafe.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dispCafe").innerHTML = this.responseText;
    }
  }
};
function AdminDeleteCafe(str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "AdminDeleteCafe.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};





//End of Admin Part






//Owner Part
  function showReservations(str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "showreservations.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};

   function DeleteReservation(str){
     var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "DeleteReservation.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
   };
   function showFeedback(str){
     var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "showFeedbacks.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
   };

 function showDeleteTables(str){
     var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "showDeleteTables.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
   };
   
function DeleteTable(str){
     var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "DeleteTable.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
   };



 function showTables (str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "showTables.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tables").innerHTML = this.responseText;
    }
  }
};


 function AddTables (str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "addTables.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};






//End of owner Part






//Client Part 
function CafeSearch(){
  var xhttp;   
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "cafeSearch.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }

};

function showCafeSearch(str) {
  var xhttp;       
  if (str == "") {
    document.getElementById("dispCafe").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "getCafe.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dispCafe").innerHTML = this.responseText;
    }
  }
};

function DisplayCafeDetails(str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "displaycafedetails.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};

function ReserveCafe(str,cid) {
  var xhttp;       
  if (str == "") {
    document.getElementById("main1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "ReserveCafe.php?id="+str+"&cid="+cid, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};
function DisplayFavoriteCafes(str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "DisplayFavoriteCafes.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};
 function RemoveFromFavorite(str){
     var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "RemoveFromFavorite.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
   document.getElementById("imgdisp").src="FavoriteOff.png";   
    }
  }
   };
   function AddToFavorite(str,cid) {
  var xhttp;       
 
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "AddToFavorite.php?cid="+str+"&uid="+cid, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("imgdisp").src="FavoriteOn.png";
     document.getElementById('imgdisp').setAttribute( "onClick", "" );
      
    }
  }
};
function getBranchesClient (str) {
  var xhttp;       
  
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "getBranches.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bran").innerHTML = this.responseText;
        document.getElementById('imgdisp').setAttribute( "onClick", "" );

    }
  }
};

 function addcomment(comment,cid,uid){
  var xhttp;   
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "addcomment.php?comment="+comment+"&cid="+cid+"&uid="+uid, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // console.log(this.responseText);

    }
  
  }
         document.getElementById("comment").value ="Done!";

};

  function getCafeBranch (str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "getCafeBranch.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bran").innerHTML = this.responseText;
    }
  }
};

function showReservationsUser (str) {
  var xhttp;       
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "showreservationsuser.php?id="+str, true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main1").innerHTML = this.responseText;
    }
  }
};





//End of Client Part






// End of Script