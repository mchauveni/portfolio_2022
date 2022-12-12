/* TO REMLOVE LATER, ITS JUST HERE FOR CONVENIENCE BECAUSE RELOADING THE PAGE TAKES ME LIKE ALL THE WAY UP EVERYTIME */
//window.scrollTo(0, 5000);

const $ = (el) => {
    return document.querySelector(el);
};
const $$ = (els) => {
    return document.querySelectorAll(els);
};

const form = $(".contact-form");
const question_wrapper = $(".question-wrapper");
const question_array = $$(".form-question");
const input_array = $$("input[type='text']");
const btn_wrapper = $(".button-wrapper");
const btn_prev = $(".form-btn-prev");
const btn_next = $(".form-btn-next");
const form_result_div = $(".form-result");
const current_question = $(".current-question");
const out_of = $(".out-of");

const shake_animation = [
    {
        transform: "translate3d(0, 0, 0)",
    },
    {
        transform: "translate3d(4px, 0, 0)",
    },

    {
        transform: "translate3d(-4px, 0, 0)",
    },

    {
        transform: "translate3d(3px, 0, 0)",
    },

    {
        transform: "translate3d(-3px, 0, 0)",
    },

    {
        transform: "translate3d(0, 0, 0)",
    },
];

const fadein_animation = [
    {
        opacity: "0",
    },
    {
        opacity: "0",
    },
    {
        opacity: "1",
    },
    {
        opacity: "1",
    },
    {
        opacity: "1",
    },
];

// FORM WRAPPER STYLE to get question height
let question_index = 0;

window.addEventListener("DOMContentLoaded", () => {
    out_of.innerHTML = question_array.length;
    question_wrapper.scrollTo(0, 0);
    form.reset();
});

btn_next.addEventListener("click", (e) => {
    e.preventDefault();
    if (input_array[question_index].value.trim() === "") {
        error();
    } else if (question_index == 3) {
        return;
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
            e.preventDefault();
            if (input_array[question_index].value.trim() === "") {
                error();
            } else {
                nextQuestion();
            }
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
            btn_next.classList.remove("visible");
            return;
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
            btn_next.classList.add("visible");
            break;
        case 3:
            question_index = 0;
            btn_next.classList.add("visible");
            btn_prev.classList.remove("visible");
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
            return response.text();
        })
        .then((server) => {
            server = JSON.parse(server);
            if (!server.status) {
                question_index = 3;
                $(".result-txt").innerHTML = server.err + " " + server.emoji;
                $(".result-icon").src = "./assets/img/err-circle.svg";
            } else {
                $(".result-txt").innerHTML = "Le message a bien été envoyé ! " + server.emoji;
                $(".result-icon").src = "./assets/img/ok-circle.svg";
                btn_next.classList.remove("visible");
                btn_prev.classList.remove("visible");
            }
        });

    changeQuestionView(true);
    form.reset();
}

function changeQuestionView(complete = false) {
    if (complete) {
        question_wrapper.scrollTo(0, question_wrapper.scrollHeight);
        form_result_div.animate(fadein_animation, { duration: 1000 });
        btn_next.innerHTML = "Next";
    } else {
        // makes the ux pleaser change
        current_question.innerHTML = question_index + 1;

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
}

function error() {
    input_array[question_index].focus();
    question_array[question_index].animate(shake_animation, { duration: 500, easing: "ease-in-out" });
}
