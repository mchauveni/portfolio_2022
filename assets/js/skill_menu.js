/* TO REMLOVE LATER, ITS JUST HERE FOR CONVENIENCE BECAUSE RELOADING THE PAGE TAKES ME LIKE ALL THE WAY UP EVERYTIME */
window.scrollTo(0, 3300);

const nav_items = document.querySelectorAll(".nav-item");
const menu = document.querySelector(".skill-view");
const slider = document.querySelector(".slider");

let navElements = Array.from(nav_items);

/* SET THE FIRST LI AS ACTIVE */
navElements[0].classList.add("active");
slider.style.width = navElements[0].offsetWidth + "px";
slider.style.left = navElements[0].offsetLeft + "px";

/* ADD EVENT LISTENERS */
navElements.forEach((li) => {
    li.addEventListener("click", () => {
        setActive(li);
    });
});

/* SETS AN ELEMENT AS AN ACTIVE (must be a LI from the navbar) */
function setActive(element) {
    if (element.classList.contains("active")) return;

    document.querySelector(".active").classList.remove("active");
    element.classList.add("active");

    console.log(element.offsetWidth);
    slider.style.width = element.offsetWidth + "px";
    slider.style.left = element.offsetLeft + "px";
}
