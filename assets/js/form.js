/* TO REMLOVE LATER, ITS JUST HERE FOR CONVENIENCE BECAUSE RELOADING THE PAGE TAKES ME LIKE ALL THE WAY UP EVERYTIME */
window.scrollTo(0, 5000);

const form = document.querySelector(".contact-form");
const question_wrapper = document.querySelector(".question-wrapper");
const question_array = document.querySelectorAll(".form-question");
const input_array = document.querySelectorAll("input[type='text']");
const btn_prev = document.querySelector(".form-btn-prev");
const btn_next = document.querySelector(".form-btn-next");
const form_result_div = document.querySelector(".form-result");

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
            changeQuestionView();
            break;
        case 1:
            question_index++;
            btn_next.innerHTML = "Send";
            changeQuestionView();
            break;
        case 2:
            submitForm();
            break;
    }
}

function previousQuestion() {
    switch (question_index) {
        case 0:
            return;
        case 1:
            question_index--;
            btn_prev.classList.remove("visible");
            changeQuestionView();
            break;
        case 2:
            question_index--;
            btn_next.innerHTML = "Next";
            changeQuestionView();
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
            console.log("Réponse serveur :");
            console.log(response);
        })
        .then((server) => {
            console.log("État serveur ?");
            console.log(server);
        });

    changeQuestionView(true);
    form.reset();
}

function changeQuestionView(complete = false) {
    if (complete) {
        question_wrapper.scrollTo(0, question_wrapper.scrollHeight);
        form_result_div.animate(fadein_animation, { duration: 1000 });
    } else {
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
