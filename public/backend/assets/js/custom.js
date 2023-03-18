const button = document.getElementById("menuButton");
const closebutton = document.getElementById("closeButton");
const content = document.getElementById("sideNav");

button.addEventListener("click", () => {
    content.style.width = "250px"
    content.style.padding = "30px"
})

closebutton.addEventListener("click", () => {
    content.style.width = "0px"
    content.style.padding = "0px"
})

console.log(button, closebutton, content)