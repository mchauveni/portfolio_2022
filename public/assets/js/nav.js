/* CODE FOR THE NAV : MAKE IT SCROLL A LITTLE LESS */

const nav_array = document.querySelectorAll("nav ul a");

nav_array.forEach((link) => {
    let id = link.href.split("#")[1];
    let corresponding_sect = document.querySelector("#" + id);

    link.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo(0, corresponding_sect.offsetTop - 120);
    });
});
