'use strict';

function toggleButton() {
    let navbar = document.getElementById("navbar");
    let sideNavbar = document.getElementById("side-navigation");
    let content = document.getElementById("content");

    if (navbar.className === 'c-menu') {
        navbar.className = 'menu__mobileNavbar';
        sideNavbar.className = "menu__mobileSideNavbar";
        content.style.marginTop = "50px"; // Adjust margin top with units (e.g., px)
    } else {
        navbar.className = 'c-menu';
        sideNavbar.className = 'c-menu__sidenavigation';
        content.style.marginTop = "0"; // Reset margin top
    }
}

function navToggle() {
    let list = document.getElementById('nav-list');

    if (list.classList.contains('u-hidden')) {
        list.classList.remove('u-hidden');
    } else {
        list.classList.add('u-hidden');
    }
}

function accordion(id) {
    let details = document.getElementById(id);

    if (details.classList.contains('u-hidden')) {
        details.classList.remove('u-hidden');
    } else {
        details.classList.add('u-hidden');
    }
}
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("c-carousel__slide");
  
 
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  
  slideIndex++;
  
 
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  
  slides[slideIndex - 1].style.display = "block";
  
 
  setTimeout(showSlides, 3000);
}
