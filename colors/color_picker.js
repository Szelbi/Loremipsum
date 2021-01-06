

/**
 * Pobieranie wartości HSLA na podstawie podanego id slidera
 */
getColorValue = function(sliderId) {

    let slider = document.getElementById(sliderId);
    let result = document.getElementById(sliderId + "-result");

    let value = slider.value;
    result.value  = value;

    slider.oninput = function () {
        result.value = slider.value;
    }
    result.oninput = function () {
        slider.value = result.value;
    }
    console.log(value);

    return value;
}


/**
 * Obiekt 'hsla'. Zawiera wartości składowych HSLA
 * @type {{saturation: (*|string), lightness: (*|string), alpha: (*|string), hue: (*|string)}}
 */
let hsla = {
    hue: getColorValue("hsl-h"),
    saturation: getColorValue("hsl-s"),
    lightness: getColorValue("hsl-l"),
    alpha: getColorValue("hsl-a")
}


/**
 * range slidery .slider
 */
let sliders = document.getElementsByClassName("slider");
for (let i = 0; i < sliders.length; i++) {
    sliders[i].addEventListener('input', () => getColorValue(sliders[i].id));
    console.log(sliders[i].id);
}

console.log(hsla);



setColor = function () {
    let results = "hsla(" + hsla.hue + ", " + hsla.saturation + '%, ' + hsla.lightness + '%, ' + hsla.alpha + ")";

    let wynik = document.getElementById("wynik");
    wynik.textContent = results; // Wartość dla <p> z wynikiem pod sliderami
    document.getElementById("main-box").style.backgroundColor = results; // Kolor dla boxa głównego
}

setColor();


/**
 * inputy .result
 */
let results = document.getElementsByClassName("result");
for (let i = 0; i < results.length; i++) {

    // Do wszystkich inputów result dodaję funkcję z automatycznym zaznaczaniem tekstu po kliknięciu
    results[i].addEventListener('click', function () {
        this.select();
    })
//
    // Dodaję funkcję colorMainBox przy wprowadzaniu wartości ręcznie do pola input
    results[i].addEventListener('input', setColor)
}




/**
 *  Ustawia background slidera Hue na całą paletę HSL
 *  Robię to w JS żeby dynamicznie wygenerować paletę zamiast pisać długiego CSS z ~12 kolorami
 */
setHueBgColor = function() {

    let colors = [];
    for(let i=0 ; i<=360; i+=10){
        let color = 'hsla(' + i +', 100%, 50%, 1)';
        colors.push(color);
    }

    let hslh = document.getElementById('hsl-h');
    hslh.style.background = 'linear-gradient(90deg, ' + colors + ')';

}
setHueBgColor();


