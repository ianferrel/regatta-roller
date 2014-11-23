
var IsiPhone = navigator.userAgent.indexOf("iPhone") != -1 ;
var IsiPod = navigator.userAgent.indexOf("iPod") != -1 ;
var IsiPad = navigator.userAgent.indexOf("iPad") != -1 ;

var IsiPhoneOS = IsiPhone || IsiPad || IsiPod ;

// Input options:
var AmountOptions = null ; 
var EventOptions = null ;

// UI elements:
var SelectedRow = null ;
var Log = document.getElementById("log") ;

// Boat list

// Game State
var State = {
  Boats : ["green", "white", "blue"],
  Wind : 0,
  Seed : 0,
  FirstPlayer : 1
}



// Install a handler on the refresh button:
$("#refresh-button").click(function () { if (confirm("Restart Game?")) { location.reload() ; } }) ;


function DisplayBoats() {
 // Add the first player and subsequent boats
 $.each(State.Boats, function(i,v) {
   if (i >= State.FirstPlayer) {
	   $("#boat-list").find("tbody")
		 .append($("<tr>")
		   .append($("<td>")
			 .text(v)
			)
		  );
   }
 })
 // Add the players wrapping around
 $.each(State.Boats, function(i,v) {
   if (i < State.FirstPlayer) {
	   $("#boat-list").find("tbody")
		 .append($("<tr>")
		   .append($("<td>")
			 .text(v)
			)
		  );
   }
 })
 
 
}


function StartGame() {
  $("#boat-table").hide(500);
  $("#start-button").hide(500);
}

// Adds a handler to the "Add Boat" button:
$("#start-button").each(function (i,el) {
 function down() {
  el.style.backgroundColor = "8137ca" ;
 }

 function up() {
  el.style.backgroundColor = "white" ;
  StartGame();
 }

 if (IsiPhoneOS) {
  el.ontouchstart = down ;
  el.ontouchend = up ;
 } else { 
  el.onmousedown = down ;
  el.onmouseup = up ;
 }
 
}) ;

// Add's a handler to the "Add Boat" button:
$("#add-button").each(function (i,el) {
 function down() {
  el.style.backgroundColor = "8137ca" ;
 }

 function up() {
  el.style.backgroundColor = "white" ;
  AddBoat();
 }

 if (IsiPhoneOS) {
  el.ontouchstart = down ;
  el.ontouchend = up ;
 } else { 
  el.onmousedown = down ;
  el.onmouseup = up ;
 }
 
}) ;

DisplayBoats();