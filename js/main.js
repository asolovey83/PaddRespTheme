const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("mobsearch-icon");
const mobsearchBox = document.getElementById("mobsearch-box");

menuIcon.addEventListener('click', function(){
    if (slideoutMenu.style.opacity == "1"){
        slideoutMenu.style.opacity = '0';
        slideoutMenu.style.pointerEvents = 'none';
    } else {
        if (mobsearchBox.style.opacity== "1"){
            mobsearchBox.style.opacity='0';
        }
        slideoutMenu.style.opacity = '1';
        slideoutMenu.style.pointerEvents = 'auto';
    }
}
);

searchIcon.addEventListener('click', function(){
    
    if (mobsearchBox.style.opacity== "1"){
        mobsearchBox.style.top='10px';
        mobsearchBox.style.opacity='0';
        mobsearchBox.style.pointerEvents="none";
    } else {
        if (slideoutMenu.style.opacity == "1"){
            slideoutMenu.style.opacity = '0';
        }
        mobsearchBox.style.top='80px';
        mobsearchBox.style.opacity='1';
        mobsearchBox.style.pointerEvents="auto";
    }    
}
);

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos < currentScrollPos && slideoutMenu.style.opacity == "1") {    
    slideoutMenu.style.opacity = '0';
    slideoutMenu.style.pointerEvents = 'none'; 
    
  } 

  if (prevScrollpos < currentScrollPos && mobsearchBox.style.opacity== "1") {    
    mobsearchBox.style.opacity='0';
    mobsearchBox.style.pointerEvents="none"; 
    
  } 

    prevScrollpos = currentScrollPos;
}