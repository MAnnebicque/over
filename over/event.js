var work;
var about;
var contact;
var backWorkToInit;
var backContactToInit;
var backAboutToInit;



function toto() {
	if (work.onClick){
       work= document.getElementById('work');
       document.getElementById("rotate_click").id ="menu_new";
       document.getElementById("work_page").id="work_page_new";
  }

  if (about.onClick){
       about= document.getElementById('about');
       document.getElementById("rotate_click").id ="menu_new";
       document.getElementById("work_page").id="work_page_new";
      
  }

  if (contact.onClick){
       contact= document.getElementById('contact');
       document.getElementById("rotate_click").id ="menu_new";
       document.getElementById("contact_page").id="contact_page_new";
      
  }

  if (logo.onClick){
      back();
      backWorkToInit = document.getElementById("work_page_new").id="work_page";
      backContactToInit = document.getElementById("contact_page_new").id="contact_page";
      backAboutToInit = document.getElementById("about_page_new").id="about_page";
  }

}



var back= function back(){
  var back = document.getElementById('logo');
	document.getElementById("menu_new").id = "rotate_click";  

}



/*  

quand tu click sur id work 
->menu déplace : rotate_click
->affichage de la page work_page
-> quand tu recliques sur about -> affiche la page about_page
-> quand tu recliques sur contact -> affiche la page contact_page 
-> quand tu cliques sur le logo, comme back()

*/

