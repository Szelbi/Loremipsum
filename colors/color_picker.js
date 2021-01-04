/**
 * Hue
 */
let slider_h = document.getElementById("hsl-h");
let result_h = document.getElementById("hsl-h-result");
result_h.value = slider_h.value;

slider_h.oninput = function () {
    result_h.value = slider_h.value;
}
result_h.oninput = function () {
    slider_h.value = result_h.value;
}


/**
 * Saturation
 */
let slider_s = document.getElementById("hsl-s");
let result_s = document.getElementById("hsl-s-result");
result_s.value = slider_s.value;

slider_s.oninput = function () {
    result_s.value = slider_s.value;
}
result_s.oninput = function () {
    slider_s.value = result_s.value;
}


/**
 * Lightness
 */
let slider_l = document.getElementById("hsl-l");
let result_l = document.getElementById("hsl-l-result");
result_l.value = slider_l.value;

slider_l.oninput = function () {
    result_l.value = slider_l.value;
}
result_l.oninput = function () {
    slider_l.value = result_l.value;
}


/**
 * Alpha
 */
let slider_a = document.getElementById("hsl-a");
let result_a = document.getElementById("hsl-a-result");
result_a.value = slider_a.value;

slider_a.oninput = function () {
    result_a.value = slider_a.value;
}
result_a.oninput = function () {
    slider_a.value = result_a.value;
}


colorMainBox = function () {
    let hue = slider_h.value;
    let sat = slider_s.value;
    let lig = slider_l.value;
    let alpha = slider_a.value;
    let results = "hsla(" + hue + ", " + sat + '%, ' + lig + '%, ' + alpha + ")";
    wynik.textContent = results; // Wartość dla <p> z wynikiem pod sliderami
    document.getElementById("main-box").style.backgroundColor = results; // Kolor dla boxa głównego
}

/**
 * range slidery .slider
 */
let sliders = document.getElementsByClassName("slider");
for (let i = 0; i < sliders.length; i++) {
    sliders[i].addEventListener('input', colorMainBox);
}


/**
 * inputy .result
 */
let results = document.getElementsByClassName("result");
for (let i = 0; i < results.length; i++) {

    // Do wszystkich inputów result dodaję funkcję z automatycznym zaznaczaniem tekstu po kliknięciu
    results[i].addEventListener('click', function () {
        this.select();
    })

    // Dodaję funkcję colorMainBox przy wprowadzaniu wartości ręcznie do pola input
    results[i].addEventListener('input', colorMainBox)

}


