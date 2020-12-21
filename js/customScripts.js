function changeParagraph() {
 document.getElementById("demo").innerHTML = "Paragraph changed.";
}

function hideDiv(elem) {
  var x = document.getElementById(elem);
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
