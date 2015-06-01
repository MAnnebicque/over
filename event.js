function work_turn() {
	document.getElementById("rotate_click").id = "about_new";

    // // Code for Chrome, Safari, Opera
    // document.getElementById("rotate_click").style.WebkitTransform = "rotate(120deg)"; 
    // // Code for IE9
    // document.getElementById("rotate_click").style.msTransform = "rotate(120deg)"; 
    // // Standard syntax
    // document.getElementById("rotate_click").style.transform = "rotate(120deg)"; 
}
function about() {
  document.getElementById("rotate_click").id = "about_new";
  
}
function contact() {
  document.getElementById("rotate_click").id = "about_new";
  
}

function back(){
	document.getElementById("about_new").id = "rotate_click";
}