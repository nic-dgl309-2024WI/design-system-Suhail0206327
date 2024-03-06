'use strict'

function toggleButton(){

    let navbar = document.getElementById("navbar");
    let sideNavbar = document.getElementById("side-navigation");
    let content =document.getElementById("content");

    if(navbar.className ==='c-menu') {
        navbar.className = 'menu__mobileNavbar';
        sideNavbar.className = "menu__mobileSideNavbar";
        content.style.marginTop= 50;
    }
    else {
        navbar.className ='c-menu';
        sideNavbar.className ='c-menu__sidenavigation';
        content.style.marginTop= 50;
    }
}

function navToggle() {
    // No need to call getElementById here
    let list = document.getElementById('nav-list');

    if (list.classList.contains('u-hidden')) {
        list.classList.remove('u-hidden');
    } else {
        list.classList.add('u-hidden');
    }
}








