// about us
let whoState = false;

const whoDot = document.getElementById("whoDot");
const whoText = document.getElementById("whoText");
const whoButton = document.getElementById("whoButton");
whoButton.addEventListener('click', () => {
    whoState = !whoState;

    if (whoState === true) {
        whoText.classList.add("d-none")
        whoDot.classList.remove("d-none")
        whoButton.innerText = "Read More"
    }
    else {
        whoText.classList.remove("d-none")
        whoDot.classList.add("d-none")
        whoButton.innerText = "Read Less"
    }
})


// goal state
let oalState = false;

const goalText = document.getElementById("goalText");
const GT2 = document.getElementById("GT2");
const gDot = document.getElementById("gDot");
const goalButton = document.getElementById("goalButton");
goalButton.addEventListener('click', () => {
    oalState = !oalState;

    if (oalState === true) {
        goalText.classList.add("d-none");
        GT2.classList.add("d-none");
        gDot.classList.remove("d-none");
        goalButton.innerText = "Read More";
    }
    else {
        goalText.classList.remove("d-none");
        gDot.classList.add("d-none");
        GT2.classList.remove("d-none");
        goalButton.innerText = "Read Less";
    }
})