const currentLocation = location.href;
var list = document.querySelectorAll("nav ul li");
var listHref = document.querySelectorAll("nav ul li a");


console.log(currentLocation);
  for (var i = 0; i < list.length; i++) {
    
    if(listHref[i].href+"/"== currentLocation){
      list[i].className += " active";
      
    }
  }
