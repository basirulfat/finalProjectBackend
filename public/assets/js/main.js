import { setupFAQ } from "./module/home.js";
import { SeeJobs } from "./module/home.js";
import {
  showSlide,
  moveCardToHighlightedArea,
  handlePrevSlide,
  handleNextSlide,
} from "./module/home.js";

const prevButton = document.querySelector(".slider__btn1");
const nextButton = document.querySelector(".slider__btn2");
const slides = Array.from(document.querySelectorAll(".company__info"));
let currentIndex = 0;

prevButton.addEventListener("click", () => {
  handlePrevSlide(slides, currentIndex);
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = slides.length - 1;
  }
});

nextButton.addEventListener("click", () => {
  handleNextSlide(slides, currentIndex);
  currentIndex++;
  if (currentIndex >= slides.length) {
    currentIndex = 0;
  }
});

setupFAQ();
SeeJobs();

// preventRightClick();

// /*===========FAQ page=======*/
// import { FAQPreventRightClick } from "./module/FAQ.js";
import { toggleAccordion } from "./module/FAQ.js";
const items = document.querySelectorAll(".accordion button");
items.forEach((item) => item.addEventListener("click", toggleAccordion));
// // FAQPreventRightClick();
// /*=========FAQ page =======*/
// /*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  toggle.addEventListener("click", () => {
    // Add show-menu class to nav menu
    nav.classList.toggle("show-menu");

    // Add show-icon to show and hide the menu icon
    toggle.classList.toggle("show-icon");
  });
};

showMenu("nav-toggle", "nav-menu");
// /*=============== SHOW MENU ===============*/
