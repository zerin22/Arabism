// Counter for checkout
document.getElementById("m1").addEventListener('click', () => {
    let count1 = document.getElementById("c1").value;
    if (count1 >= 1) {
        const currentValue = parseInt(count1) - 1;
        document.getElementById("c1").value = currentValue;
    }
})
document.getElementById("p1").addEventListener('click', () => {
    let count1 = document.getElementById("c1").value;
    const currentValue = parseInt(count1) + 1;
    document.getElementById("c1").value = currentValue;
})

document.getElementById("m2").addEventListener('click', () => {
    let count2 = document.getElementById("c2").value;
    if (count2 >= 1) {
        const currentValue = parseInt(count2) - 1;
        document.getElementById("c2").value = currentValue;
    }
})
document.getElementById("p2").addEventListener('click', () => {
    let count2 = document.getElementById("c2").value;
    const currentValue = parseInt(count2) + 1;
    document.getElementById("c2").value = currentValue;
})

document.getElementById("m3").addEventListener('click', () => {
    let count3 = document.getElementById("c3").value;
    if (count3 >= 1) {
        const currentValue = parseInt(count3) - 1;
        document.getElementById("c3").value = currentValue;
    }
})
document.getElementById("p3").addEventListener('click', () => {
    let count3 = document.getElementById("c3").value;
    const currentValue = parseInt(count3) + 1;
    document.getElementById("c3").value = currentValue;
})