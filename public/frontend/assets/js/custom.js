// banner
let bannerTextState = false;

const bDot = document.getElementById("bDot");
const bannerText1 = document.getElementById("BT1");
const bannerText = document.getElementById("moreText");
const toglr = document.getElementById("bannertoggler");
toglr.addEventListener('click', () => {
    bannerTextState = !bannerTextState;
    console.log(bannerTextState);
    if (bannerTextState === true) {
        bannerText.classList.remove("d-none");
        bannerText1.classList.remove("d-none");
        bDot.classList.add("d-none");
        toglr.innerText = "Read Less";
    }
    else {
        bDot.classList.remove("d-none");
        bannerText1.classList.add("d-none");
        bannerText.classList.add("d-none");
        toglr.innerText = "Read More";
    }
})


// about us
let whoState = false;

const whoDot = document.getElementById("whoDot");
const whoText = document.getElementById("whoText");
const whoButton = document.getElementById("whoButton");
whoButton.addEventListener('click', () => {
    whoState = !whoState;

    if (whoState === true) {
        whoText.classList.remove("d-none")
        whoDot.classList.add("d-none")
        whoButton.innerText = "Read Less"
    }
    else {
        whoText.classList.add("d-none")
        whoDot.classList.remove("d-none")
        whoButton.innerText = "Read More"
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
        goalText.classList.remove("d-none");
        GT2.classList.remove("d-none");
        gDot.classList.add("d-none");
        goalButton.innerText = "Read Less";
    }
    else {
        goalText.classList.add("d-none");
        gDot.classList.remove("d-none");
        GT2.classList.add("d-none");
        goalButton.innerText = "Read More";
    }
})


// service section
let serviceState = false;

const serviceText = document.getElementById("serviceText");
const serDot = document.getElementById("serDot");
const serviceButton = document.getElementById("serviceButton");
serviceButton.addEventListener('click', () => {
    serviceState = !serviceState;

    if (serviceState === true) {
        serviceText.classList.remove("d-none");
        serDot.classList.add("d-none");
        serviceButton.innerText = "Read Less";
    }
    else {
        serDot.classList.remove("d-none");
        serviceText.classList.add("d-none");
        serviceButton.innerText = "Read More";
    }
})


// mission
let missionState = false;

const missionD = document.getElementById("missionD");
const missiont = document.getElementById("missionT");
const missionButton = document.getElementById("missionB");
missionButton.addEventListener('click', () => {
    missionState = !missionState;

    if (missionState === true) {
        missiont.classList.remove("d-none");
        missionD.classList.add("d-none");
        missionButton.innerText = "Read Less";
    }
    else {
        missionD.classList.remove("d-none");
        missiont.classList.add("d-none");
        missionButton.innerText = "Read More";
    }
})


// saudi section
let sauduS = false;

const saudiT = document.getElementById("saudiT");
const saudiDot = document.getElementById("saudiDot");
const saudiB = document.getElementById("saudiB");
const sdt1 = document.getElementById("sdt1");
saudiB.addEventListener('click', () => {
    sauduS = !sauduS;

    if (sauduS === true) {
        saudiT.classList.remove("d-none");
        sdt1.classList.remove("d-none");
        saudiDot.classList.add("d-none");
        saudiB.innerText = "Read Less";
    }
    else {
        saudiT.classList.add("d-none");
        sdt1.classList.add("d-none");
        saudiDot.classList.remove("d-none");
        saudiB.innerText = "Read More";
    }
})




