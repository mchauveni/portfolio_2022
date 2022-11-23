const form = document.querySelector(".contact-form");
const status = document.querySelector("#status");
const question_wrapper = document.querySelector(".question-wrapper");
const btn_prev = document.querySelector(".form-btn-prev");
const btn_next = document.querySelector(".form-btn-next");

// FORM WRAPPER STYLE to get question height
let question_index = 0;

question_wrapper.style.height = document.querySelectorAll(".form-question")[0].offsetHeight + "px";
console.log(document.querySelectorAll(".form-question")[0].offsetHeight);

btn_next.addEventListener("click", (e) => {
    e.preventDefault();
    nextQuestion();
});
btn_prev.addEventListener("click", () => {});

// AJAX FOR THE FORM
form.addEventListener("submit", (event) => {
    // annuler le comportement par défaut du navigateur pour l'empêcher de soumettre automatiquement les données
    event.preventDefault();

    // récupérer les données du formulaire
    const datas = new FormData(form);

    // les options AJAX
    const options = {
        method: "post", // la méthode POST
        body: datas, // placer les données de formulaire dans le corps de la requête
    };

    console.log(form.action);

    fetch(form.action, options);

    form.reset();
});

function nextQuestion() {
    switch (question_index) {
        case 0:
            question_index++;
            btn_prev.classList.add("visible");
            break;
        case 1:
            question_index++;
            btn_next.innerHTML = "Send";
            break;
        case 2:
            form.submit();
            break;
    }
    question_wrapper.scrollTo(0, document.querySelectorAll(".form-question")[0].offsetHeight * question_index);
}
