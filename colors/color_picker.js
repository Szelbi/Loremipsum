

var slider = document.getElementById("hsl-h");
var result = document.getElementById("hsl-h-result");
result.value = slider.value;

slider.oninput = function() {
    result.value = this.value;
}