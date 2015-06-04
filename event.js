

function afficherWorkContent() {
  document.getElementById('work-content').style.width = "70%";
  document.getElementById('work-content').style.visibility = "visible";
  document.getElementById('closeContent').style.visibility = "visible";
}
document.getElementById('work').onclick = afficherWorkContent;

function fermerContent() {
document.getElementById('closeContent').style.visibility = "hidden";
document.getElementById('work-content').style.width = "0%";
document.getElementById('about-content').style.width = "0%";
document.getElementById('contact-content').style.width = "0%";
 }
document.getElementById('closeContent').onclick = fermerContent;


function afficherAboutContent() {


  document.getElementById('about-content').style.visibility = "visible";
  document.getElementById('about-content').style.width = "70%";
  document.getElementById('closeContent').style.visibility = "visible";
}

document.getElementById('about').onclick = afficherAboutContent;

function afficherContactContent() {


  document.getElementById('contact-content').style.visibility = "visible";
  document.getElementById('contact-content').style.width = "70%";
  document.getElementById('closeContent').style.visibility = "visible";
}

document.getElementById('contact').onclick = afficherContactContent;

// function logoMove() {


//   document.getElementById('menu').style.visibility = "visible";
//   document.getElementById('menu').style.left = "500px";
//   document.getElementById('menu').style.top = "80px";
//   document.getElementById('menu').style.webkitTransform = "scale(0.5)";

// }

// document.getElementById('').onclick = logoMove;