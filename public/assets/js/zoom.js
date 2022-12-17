/* CODE FOR ZOOMING ON IMG IN GALLERIES */

function createZoom(img) {
    /* Create the elements */
    let bgdiv = document.createElement("div");
    bgdiv.id = "zoom_bg";
    let zoomImg = document.createElement("img");
    zoomImg.id = "zoom_img";
    let zoomCtx = document.createElement("p");
    zoomCtx.id = "zoom_ctx";

    /* Adds them to each other & to body */
    bgdiv.appendChild(zoomImg);
    bgdiv.appendChild(zoomCtx);
    document.body.appendChild(bgdiv);

    /* Show the shit after 100 ms to make it fade in */
    setTimeout(() => {
        bgdiv.classList.add("show");
    }, 100);
    zoomImg.src = img.src;
    zoomCtx.innerHTML = img.alt;
}

/* Get all element with data-zoom attribute */
document.querySelectorAll("[data-zoom]").forEach((img) => {
    /* Add event listener for each img */
    img.addEventListener("click", (e) => {
        createZoom(img);
        console.log(img.src);

        /* Onclick, get bgdiv & adds event listener on it */
        let bgdiv = document.querySelector("#zoom_bg");
        bgdiv.addEventListener("click", () => {
            bgdiv.classList.remove("show");
            setTimeout(() => {
                bgdiv.remove();
            }, 300);
        });
    });
});
