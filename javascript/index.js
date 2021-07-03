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

function typeSlogan() {
  if (sloganWriter < sloganString.length) {
    document.getElementById("sloganTitel").innerHTML += sloganString.charAt(sloganWriter);
    sloganWriter++;

    setTimeout(typeSlogan, 8);
  }
}





// Slides
let slides = document.getElementById('slides');
let mainSlideText = document.getElementById('mainSlideText');

slides.addEventListener("animationend", fadeInScreen);
mainSlideText.addEventListener("animationend", stayOnScreen);

function fadeInScreen() {
  mainSlideText.style.animation = 'fadein 2s';
}
function stayOnScreen() {
  mainSlideText.style.opacity = '1';
}
//setInterval(nextSlide, 5000);






// Check position
let screen = document.getElementById('screen');

let slidePosition = slides.getBoundingClientRect();
let screenPosition = screen.getBoundingClientRect();
console.log("Slide Links: " + slidePosition.left);
console.log("Slide Top: " + slidePosition.top);



screen.addEventListener("click", test) 
setTimeout(typeSlogan(), 3000);
typeTitle();

