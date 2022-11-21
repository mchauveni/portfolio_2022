const navbar = document.querySelector(".skill-nav-list");
const menu = document.querySelector(".skill-view");

let lis = Array.from(navbar.children);

lis.forEach((li) => {
    console.log(li);

    li.addEventListener("click", () => {
        li.classList.add("active");
    });
});
