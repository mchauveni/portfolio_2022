defaultSettings = {
    color: "var(--bg-secondary)",
    lifespan: "1000",
};

let element_with_popup_array = Array.from(document.querySelectorAll("[popup]"));
let popup_array = [];

element_with_popup_array.forEach((element) => {
    let color;
    if (element.hasAttribute("popup-color")) {
        color = element.getAttribute("popup-color");
    } else {
        color = undefined;
    }

    if (element.hasAttribute("popup-click")) {
        element.addEventListener("click", (e) => {
            popupAppear(popupCreate(), e.target, color);
            popupHold(1000);
        });
    } else {
        element.addEventListener("mouseenter", (e) => {
            popupAppear(popupCreate(), e.target, color);
        });

        element.addEventListener("mouseleave", (e) => {
            popupKill();
        });
    }
});

function popupAppear(popup, element, color = defaultSettings.color, lifespan = defaultSettings.lifespan) {
    var pos = element.getBoundingClientRect();

    popup.innerHTML = element.getAttribute("popup-content");
    popup.style.top = pos.top + window.scrollY - popup.offsetHeight + "px"; // Put popup on top of element
    popup.style.left = pos.left + element.offsetWidth / 2 - popup.offsetWidth / 2 + "px"; // Put center of popup on center of the element
    popup.style.backgroundColor = color;
    popup.classList.add("shown");
}

function popupHold(time) {
    let popupToHold = popup_array[0];
    popup_array.shift();
    setTimeout(() => {
        popupKill(popupToHold);
    }, time);
}

function popupKill(popupToKill = false) {
    if (!popupToKill) {
        popupToKill = popup_array[0];
    }

    popupToKill.classList.remove("shown");
    setTimeout(() => {
        popupToKill.remove();
    }, 300);
    popup_array.shift();
}

function popupCreate() {
    let thepopup = document.createElement("i");
    thepopup.classList.add("popup");
    document.body.appendChild(thepopup);
    popup_array.push(thepopup);
    return thepopup;
}
