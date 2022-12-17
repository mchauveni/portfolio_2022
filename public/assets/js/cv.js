/* CODE FOR COPYING CV URL WHEN CLICKING CV BUTTON */

let btn = document.querySelector(".copy_cv");

btn.addEventListener("click", () => {
    navigator.clipboard.writeText("https://mchauveni.alwaysdata.net/cv_portfolio.pdf");
});
