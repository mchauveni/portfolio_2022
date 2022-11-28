/* TO REMLOVE LATER, ITS JUST HERE FOR CONVENIENCE BECAUSE RELOADING THE PAGE TAKES ME LIKE ALL THE WAY UP EVERYTIME */
window.scrollTo(0, 5000);

const form = document.querySelector(".contact-form");
const status = document.querySelector("#status");
const question_wrapper = document.querySelector(".question-wrapper");
const btn_prev = document.querySelector(".form-btn-prev");
const btn_next = document.querySelector(".form-btn-next");
const question_array = document.querySelectorAll(".form-question");
const input_array = document.querySelectorAll("input[type='text']");

// FORM WRAPPER STYLE to get question height
let question_index = 0;

btn_next.addEventListener("click", (e) => {
    e.preventDefault();
    if (input_array[question_index].value.trim() === "") {
        error();
    } else {
        nextQuestion();
    }
});

btn_prev.addEventListener("click", (e) => {
    e.preventDefault();
    previousQuestion();
});

input_array.forEach((input) => {
    input.addEventListener("keydown", (e) => {
        if (e.key === "Enter") {
            nextQuestion();
        }
    });
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
            submitForm();
            break;
    }
    changeQuestionView();
}

function previousQuestion() {
    switch (question_index) {
        case 0:
            return;
        case 1:
            question_index--;
            btn_prev.classList.remove("visible");
            break;
        case 2:
            question_index--;
            btn_next.innerHTML = "Next";
            break;
    }
    changeQuestionView();
}

function submitForm() {
    // retrieve data
    const datas = new FormData(form);

    // AJAX options
    const options = {
        method: "post",
        body: datas,
    };

    fetch(form.action, options)
        .then((response) => {
            console.log(response);
        })
        .then((server) => {
            console.log(server);
        });

    question_index = 0;
    changeQuestionView();
    form.reset();
}

function changeQuestionView() {
    // Scroll & disable buttons (cant spam click)
    question_wrapper.scrollTo(0, question_array[0].offsetHeight * question_index);
    btn_next.disabled = true;
    btn_prev.disabled = true;

    // Focus input (convenience) and reactivate buttons
    setTimeout(() => {
        question_array[question_index].children[1].focus();
        btn_next.disabled = false;
        btn_prev.disabled = false;
    }, 200);
}

function error() {
    input_array[question_index].focus();

    question_array[question_index].classList.add("err");
    setTimeout(() => {
        question_array[question_index].classList.remove("err");
    }, 500);
}
