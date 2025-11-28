'use strict';



/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");

const navElems = [overlay, navOpenBtn, navCloseBtn];

for (let i = 0; i < navElems.length; i++) {
  navElems[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}



/**
 * header & go top btn active on page scroll
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 80) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }
});







// next step slideee




const slides = document.querySelectorAll('.hero-bg');
let currentSlide = 0;

function changeSlide() {
  // 1. Remove the 'active' class from the current slide
  slides[currentSlide].classList.remove('active');

  // 2. Calculate the next slide index
  // (The % symbol loops it back to 0 when it reaches the end)
  currentSlide = (currentSlide + 1) % slides.length;

  // 3. Add the 'active' class to the new slide
  slides[currentSlide].classList.add('active');
}

// Run the changeSlide function every 3000 milliseconds (3 seconds)
setInterval(changeSlide, 3000);