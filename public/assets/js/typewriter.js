/* TYPEWRITER FOR THE H1 */

let titles = document.querySelectorAll("h1");

let i = 0;

titles.forEach((element) => {
    let title_content = element.innerHTML;
    element.innerHTML = "";
    let title_interval = setInterval(() => {
        if (i > title_content.length) {
            clearInterval(title_interval);
        }
        element.innerHTML = title_content.substring(0, i);
        i++;
    }, 40);
});
