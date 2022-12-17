/* CODE FOR THE LAVA MENU */

const nav_items = document.querySelectorAll(".nav-item");
const menu = document.querySelector(".skill-view");
const slider = document.querySelector(".slider");

let navElements = Array.from(nav_items);

window.addEventListener("DOMContentLoaded", () => {
    menu.scrollTo(0, 0);
});

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

    document.querySelectorAll(".active").forEach((active) => {
        active.classList.remove("active");
    });
    element.classList.add("active");

    slider.style.width = element.offsetWidth + "px";
    slider.style.left = element.offsetLeft + "px";

    let view_part = document.querySelector("." + element.innerHTML.toLowerCase());
    view_part.classList.add("active");

    menu.scrollTo(view_part.offsetLeft - menu.offsetLeft, 0);
}
