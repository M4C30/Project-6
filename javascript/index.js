let titleWriter = 0;
let sloganWriter = 0;
let titleString = "PlanCo.";
let sloganString = "Plan. Cooperate. Coordinate. ";
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

let slides = document.getElementById('slides');
let mainSlideText = document.getElementById('mainSlideText');

// Check position
let screen = document.getElementById('screen');
if (screen.)
let position = slides.getBoundingClientRect();
alert("Links: " + position.left);
alert("Top: " + position.top);

// Slides


slides.addEventListener("animationend",fadeInScreen);
mainSlideText.addEventListener("animationend",stayOnScreen);

function fadeInScreen(){
  mainSlideText.style.animation = 'fadein 2s';
}
function stayOnScreen(){
  mainSlideText.style.opacity = '1';
}
setInterval(nextSlide, 5000);

function nextSlide(){

}









setTimeout(typeSlogan(),3000);
typeTitle();