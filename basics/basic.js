function hideDiv(elem) {
    let x = document.getElementById(elem);
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
