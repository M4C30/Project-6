let titleWriter = 0;
let sloganWriter = 0;
let titleString = "PlanCo";
let sloganString = "Plan. Coordinate. Cooperate.";
let speed = 200;


function typeTitle() {
  if (titleWriter < titleString.length) {
    document.getElementById("welkomTitel").innerHTML += titleString.charAt(titleWriter);
    titleWriter++;
    
    setTimeout(typeTitle, 50);
  }
  
}



function typeSlogan(){
    if (sloganWriter < sloganString.length) {
        document.getElementById("sloganTitel").innerHTML += sloganString.charAt(sloganWriter);
        sloganWriter++;
        
        setTimeout(typeSlogan, 8);
      }
}

setTimeout(typeSlogan(),3000);

typeTitle();