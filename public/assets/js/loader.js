/* CODE FOR THE LOADER : MAKE IT DISAPEAR */
/* STOLEN FROM ALEX EHEH */

let startLoad = window.performance.now();
document.addEventListener("DOMContentLoaded", () => {
    const loader = document.querySelector(".loader_wrapper");
    const loader_style = document.querySelector("#loader_style");

    /* To make a loading animation i think */
    const navAnchors = document.querySelectorAll("nav a");
    const langToggler = document.querySelector(".lang_toggler_wrapper");
    let titles = document.querySelectorAll(".main-title, h1");
    let subtitle = document.querySelector("h1");

    window.onload = () => {
        hideEverything();
        let timeToWait = 0;
        let endLoad = window.performance.now();
        let deltaLoad = (endLoad - startLoad) / 1000;
        deltaLoad = Number(deltaLoad.toFixed(2));

        /* If loading was faster than 2s, then wait additional time */
        if (deltaLoad < 1) {
            timeToWait = (1 - deltaLoad) * 1000;
        }

        /* Hide the loader after min 2s & start loading animation */
        setTimeout(() => {
            loader.style.opacity = 0;
            document.body.style.overflow = "show";
            pageloadAnimation();
        }, timeToWait);

        /* Delete loader & inline css after animation is complete */
        setTimeout(() => {
            loader.remove();
            loader_style.remove();
        }, timeToWait + 500);
    };

    /* Makes everything 'load' */
    function pageloadAnimation() {
        /* Make a fadein */
        let adelay = 100;
        navAnchors.forEach((a) => {
            adelay += 100;
            setTimeout(() => {
                a.style.opacity = "";
            }, adelay);
        });

        /* Make lang toggler go up */
        setTimeout(() => {
            langToggler.style.top = "";
        }, adelay);

        /* Make titles fadein */
        let titledelay = 300;
        titles.forEach((title) => {
            titledelay += 300;
            setTimeout(() => {
                title.style.opacity = "";
            }, titledelay);
        });

        /* Make subtitle writes */
        //typeWrite(titledelay);
    }

    /* Hides everything that needs to be hidden before page loads */
    function hideEverything() {
        navAnchors.forEach((a) => {
            a.style.opacity = 0;
        });
        titles.forEach((title) => {
            title.style.opacity = 0;
        });
        langToggler.style.top = "150vh";
    }

    /* Writes text in h1 (subtitle) */
    function typeWrite(delay) {
        let i = 0;
        let title_content = subtitle.innerHTML;
        subtitle.innerHTML = " ";

        setTimeout(() => {
            let title_interval = setInterval(() => {
                if (i > title_content.length) {
                    clearInterval(title_interval);
                }
                subtitle.innerHTML += title_content.substring(i - 1, i);
                i++;
            }, 40);
        }, delay - 100);
    }
});
