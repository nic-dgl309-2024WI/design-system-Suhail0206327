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

const prevBtn = document.querySelector('.c-carousel__prev-btn');
const nextBtn = document.querySelector('.c-carousel__next-btn');
const carousel = document.querySelector('.c-carousel__slides');

let slideIndex = 0;

prevBtn.addEventListener('click', () => {
  slideIndex = (slideIndex === 0) ? slides.length - 1 : slideIndex - 1;
  updateSlidePosition();
});

nextBtn.addEventListener('click', () => {
  slideIndex = (slideIndex === slides.length - 1) ? 0 : slideIndex + 1;
  updateSlidePosition();
});

function updateSlidePosition() {
  carousel.style.transform = `translateX(-${slideIndex * 100}%)`;
}
