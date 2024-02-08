'use strict'

function toggleButton(){

    let navbar = document.getElementById("navbar");
    let sideNavbar = document.getElementById("side-navigation");

    if(navbar.className ==='c-menu') {
        navbar.className === 'menu__mobileNavbar';
        sidenavbar.className === "menu__mobileSideNavbar";
    }
    else {
        navbar.className ==='c-menu';
        sideNavbar.className ==='c-menu__sidenavigation';
    }
}