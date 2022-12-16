/* STOLEN FROM ALEX EHEH */

let startLoad = window.performance.now();
document.addEventListener("DOMContentLoaded", () => {
    const loader = document.querySelector(".loader_wrapper");
    const loader_style = document.querySelector("#loader_style");

    window.onload = () => {
        let timeToWait = 0;
        let endLoad = window.performance.now();
        let deltaLoad = (endLoad - startLoad) / 1000;
        deltaLoad = Number(deltaLoad.toFixed(2));

        /* If loading was faster than 2s, then wait additional time */
        if (deltaLoad < 1) {
            timeToWait = (1 - deltaLoad) * 1000;
        }

        /* Hide the loader after min 2s */
        setTimeout(() => {
            loader.style.opacity = 0;
            document.body.style.overflow = "show";
        }, timeToWait);

        /* Delete loader & inline css after animation is complete */
        setTimeout(() => {
            loader.remove();
            loader_style.remove();
        }, timeToWait + 500);
    };
});
