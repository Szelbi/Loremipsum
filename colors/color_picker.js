/**
 * Hue
 */
var slider_h = document.getElementById("hsl-h");
var result_h = document.getElementById("hsl-h-result");
result_h.value = slider_h.value;

slider_h.oninput = function() {
    result_h.value = slider_h.value;
}
result_h.oninput = function() {
    slider_h.value = result_h.value;
}



/**
 * Saturation
 */
var slider_s = document.getElementById("hsl-s");
var result_s = document.getElementById("hsl-s-result");
result_s.value = slider_s.value;

slider_s.oninput = function() {
    result_s.value = slider_s.value;
}
result_s.oninput = function() {
    slider_s.value = result_s.value;
}


/**
 * Lightness
 */
var slider_l = document.getElementById("hsl-l");
var result_l = document.getElementById("hsl-l-result");
result_l.value = slider_l.value;

slider_l.oninput = function() {
    result_l.value = slider_l.value;
}
result_l.oninput = function() {
    slider_l.value = result_l.value;
}


/**
 * Alpha
 */
var slider_a = document.getElementById("hsl-a");
var result_a = document.getElementById("hsl-a-result");
result_a.value = slider_a.value;

slider_a.oninput = function() {
    result_a.value = slider_a.value;
}
result_a.oninput = function() {
    slider_a.value = result_a.value;
}

//
// document.querySelector('.slider').addEventListener('click', event ={
//
// })

myFunction = function() {

    var hue = slider_h.value;
    var sat = slider_s.value;
    var lig = slider_l.value;
    var alpha = slider_a.value;
    let results = "hsla(" + hue + ", " + sat + '%, ' + lig + '%, ' + alpha +")";
    wynik.textContent = results;
    document.getElementById("box").style.backgroundColor = results;
}

var sliders = document.getElementsByClassName("slider");

for (var i = 0; i < sliders.length; i++) {
    sliders[i].addEventListener('click', myFunction);
}

for (var i = 0; i < sliders.length; i++) {
    sliders[i].addEventListener('onmousemove', myFunction);
}



function outputUpdate(vol) {
    document.querySelector('#hsl-s-result').value = (vol);
    document.querySelector('#range').value = -(vol - 100);
    // alert(-(vol - 100));
}

/*
TODO
Trzeba zrobić żeby wartości aktualizowały się automatycznie.
Przypisać jakoś funkcję  myFunction do akcji oninput, która działa na razie tylko dla poszczególnych elementów
Trzeba przypisać funkcję do wszystkich elementów
 */