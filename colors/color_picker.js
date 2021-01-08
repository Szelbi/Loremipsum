/**
 *  Ustawia background slidera Hue na całą paletę HSL
 *  Robię to w JS żeby dynamicznie wygenerować paletę zamiast pisać długiego CSS z ~12 kolorami
 */
setHueBgColor = function () {

    let colors = [];
    for (let i = 0; i <= 360; i += 10) {
        let color = 'hsla(' + i + ', 100%, 50%, 1)';
        colors.push(color);
    }

    let hslh = document.getElementById('hsl-h');
    hslh.style.background = 'linear-gradient(90deg, ' + colors + ')';
}
setHueBgColor();




/**
 * Pobieranie wartości HSLA na podstawie podanego id slidera
 */
getSliderValue = function (sliderId) {

    let slider = document.getElementById(sliderId);
    let result = document.getElementById(sliderId + "-result");

    let value = slider.value;
    result.value = value;

    slider.oninput = function () {
        result.value = slider.value;
    }

    return value;
}


getResultValue = function (sliderId) {

    let slider = document.getElementById(sliderId);
    let result = document.getElementById(sliderId + "-result");

    let value = result.value;
    slider.value = value;

    result.oninput = function () {
        slider.value = value;
    }

    return value;
}


/**
 * Obiekt 'hsla'. Zawiera wartości składowych HSLA
 * @type {{saturation: (*|string), lightness: (*|string), alpha: (*|string), hue: (*|string)}}
 */
class hsla {

    hue;
    saturation;
    lightness;
    alpha;

    constructor(hue, saturation, lightness, alpha) {
        this.hue = hue;
        this.saturation = saturation;
        this.lightness = lightness;
        this.alpha = alpha;
    }

    update(callback) {
        this.hue = callback("hsl-h");
        this.saturation = callback("hsl-s");
        this.lightness = callback("hsl-l");
        this.alpha = callback("hsl-a");
    }
}

/**
 * Ustawianie koloru main-boxa.
 * Dodatkowo wstawiam wartość $result do lini wyniku #wynik
 * @param obj
 */
setBoxColor = function (obj) {
    let results = `hsla(${obj.hue}, ${obj.saturation}%,  ${obj.lightness}%,  ${obj.alpha})`;
    // console.log(results);
    let wynik = document.getElementById("wynik");
    wynik.textContent = results; // Wartość dla <p> z wynikiem pod sliderami
    document.getElementById("main-box").style.backgroundColor = results; // Kolor dla boxa głównego
}

//TODO Wartości domyślne chyba mogłbyby być ładowane z konstruktora. Można to przerobić.
let obj = new hsla(180, 100, 50, 1);

obj.update(getSliderValue);
obj.update(getResultValue);
setBoxColor(obj);


/**
 * range slidery .slider
 */
let sliders = document.getElementsByClassName("slider");
for (let i = 0; i < sliders.length; i++) {
    sliders[i].addEventListener('input', () => {
        obj.update(getSliderValue);
        setBoxColor(obj)
    });
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
//
    // Dodaję funkcję colorMainBox przy wprowadzaniu wartości ręcznie do pola input
    results[i].addEventListener('input', () => {
        obj.update(getResultValue);
        setBoxColor(obj)
    });
}



/*
TODO
Jest jakiś problem podczas wpisywania result z ręki. Może % się gdzieś przekazuje?
Dodać walidację pól result
 */