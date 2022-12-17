/* CODE FOR MAKING SHIT FADE IN AS USER SCROLLS */
/* STOLENT FROM THEO EHEH */

window.addEventListener("DOMContentLoaded", () => {
    const sectionTitleAndContent = document.querySelectorAll(".section_title, .section_content");

    sectionTitleAndContent.forEach((sect) => {
        sect.style.opacity = 0;
    });

    let options = {
        threshold: 0.1,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
            }
        });
    }, options);

    sectionTitleAndContent.forEach((section) => {
        observer.observe(section);
    });
});
