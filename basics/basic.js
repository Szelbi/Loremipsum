function hideDiv(elem, obj) {
    let x = document.getElementById(elem);
    if (x.style.display === "block") {
        x.style.display = "none";
        obj.innerHTML = "►"
    } else {
        x.style.display = "block";
        obj.innerHTML = "▼"
    }
}
