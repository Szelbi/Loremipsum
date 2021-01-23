import {HSLToRGB} from './color_converters.js';


/**
 * Funkcja do sprawdzania czy wartość jest liczbą
 */
function IsNumeric(val) {
    console.log(Number(parseFloat(val)));
    // return Number(parseFloat(val)) == val;
    return isFinite(val);
}


/**
 * Zmieniam przecinek na kropnę w inpucie hsl-a-result
 */
document.getElementById('hsl-a-result').addEventListener('input', function () {
        this.value = this.value.replace(/,/g, '.')
    }
);


/**
 * Dozwolone tylko cyfry oraz kropka i przecinek w przypadku inputa dla Alphy
 * @param object
 * @param event
 */
function allowNumbers (object, event) {


    /**
     * Dopuszczone maksymalnie 4 znaki
     */
    object.value.length > 3 ? event.preventDefault() : true;

    /**
     * Jeżeli badanym elementem jest #hsl-a-result to:
     * 1. Sprawdzam czy wprowadzany znak jest cyfrą, kropką lub przecinkiem
     * 2. Jeżeli wprowadzany znak to przecinek lub kropka to sprawdzam czy w inpucie nie ma już wprowadzonej kropki
     * Jeżeli warunki są spełnione to nie pozwalam wprowadzić znaku do inputa
     *
     * W pozostałych przypadkach (inputy inne niż alpha) pozwalam wprowadzić jedynie cyfry
     */
    if (object.id === 'hsl-a-result') {
        (!(/[0-9,.]/.test(event.key)) || (/[.,]/.test(event.key) && /[.]/.test(object.value))) ? event.preventDefault() : true;

    } else {
        !(/[0-9]/.test(event.key)) ? event.preventDefault() : true;
    }
}

/**
 * Ustawiam maksymalny zakres możliwych do wprowadzenia wartości.
 * Rozpatruję tylko przypadki dodatnie, ponieważ wcześniej już blokuję możliwość wpisania znaku minus (-)
 * @param obj
 * @param e
 * @param rangeId
 */
function setInputRange (obj, e, rangeId) {

    // łączę aktualną (starą) wartość z inputa z nową wartością którą wprowadza użytkownik z eventa
    let newValue = parseFloat(obj.value + e.key);

    // pobieram informację, która wartość jest sprawdzana
    let part = rangeId.split("-")[1];

    if (['s', 'l'].includes(part) && newValue > 100) {
        e.preventDefault();
    }
    if (['h'].includes(part) && newValue > 360) {
        e.preventDefault();
    }
    if (['a'].includes(part) && newValue > 1) {
        e.preventDefault();
    }
}


/**
 * Pobieranie wartości HSLA na podstawie podanego id slidera
 */
function getSliderValue (sliderId) {

    let slider = document.getElementById(sliderId);
    let result = document.getElementById(sliderId + "-result");

    let value = slider.value;
    result.value = value;

    return value;
}

/**
 * Pobieranie wartości HSLA na podstawie podanego id resulta
 */
function getResultValue (sliderId) {

    let slider = document.getElementById(sliderId);
    let result = document.getElementById(sliderId + "-result");

    let value = result.value;
    slider.value = value;

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
 * Ustawianie kolorów dla main-boxa i wszystkich sliderów
 */
function setColors () {

    let color = `hsla(${obj.hue}, ${obj.saturation}%, ${obj.lightness}%, ${obj.alpha})`;

    let bg_hsla = `linear-gradient(to right, ${color}, ${color}), url(../img/alpha4.png)`;

    /**
     * Main-box color
     */
    document.getElementById("main-box").style.backgroundImage = bg_hsla;
    document.getElementById("main-box").style.backgroundSize = '55px';


    /**
     * Wartość tekstowa hsla do #output-hsla
     */
    document.getElementById("output-hsla").value = color;

    /**
     * Wartość tekstowa hsla do #output-rgba
     */
    let rgb = HSLToRGB(obj.hue, obj.saturation, obj.lightness, obj.alpha);
    document.getElementById("output-rgba").value = rgb;


    /**
     *  Hue slider
     *  Ustawiam background slidera Hue na całą paletę HSL
     *  Robię to w JS żeby dynamicznie wygenerować paletę zamiast pisać długiego CSS z ~12 kolorami
     */
    let colors = [];
    for (let i = 0; i <= 360; i += 10) {
        let color = `hsla(${i} , ${obj.saturation}%, ${obj.lightness}%, ${obj.alpha})`;
        colors.push(color);
    }
    document.getElementById('hsl-h').style.backgroundImage = `linear-gradient(
            to right, 
            ${colors}
        ), url(../img/alpha4.png)`;

    /**
     * Saturation slider
     */
    document.getElementById("hsl-s").style.backgroundImage = `linear-gradient(
            to right, 
            hsla(${obj.hue},0%,${obj.lightness}%,${obj.alpha}), 
            hsla(${obj.hue},100%,${obj.lightness}%,${obj.alpha})
        ), url(../img/alpha4.png)`;

    /**
     * Lightness slider
     */
    document.getElementById("hsl-l").style.backgroundImage = `linear-gradient(
            to right, 
            hsla(${obj.hue},${obj.saturation}%,0%,${obj.alpha}), 
            hsla(${obj.hue},${obj.saturation}%,50%,${obj.alpha}), 
            hsla(${obj.hue},${obj.saturation}%,100%,${obj.alpha})
        ), url(../img/alpha4.png)`;


    /**
     * Alpha slider
     */
    let alpha = document.getElementById("hsl-a");
    alpha.style.backgroundImage = `linear-gradient(
            to right, 
            transparent, 
            hsla(${obj.hue},${obj.saturation}%,${obj.lightness}%,1)
        ), url(../img/alpha4.png)`;


    /**
     * Modyfying -webkit-slider-thumb:hover in the #extra-css element.
     * Need to change this in JS since I couldnt just use background:transperant in CSS because the thumb
     * is bigger than the sliders
     */
    let style = document.querySelector('[id="extra-css"]');
    // style.innerHTML = `.slider::-webkit-slider-thumb:hover { background-color: hsla(180, 100%, 50%, 1) }`;


    let hue_color = `hsla(${obj.hue}, 100%, 50%, 0.4)`;

    style.innerHTML = `.slider::-webkit-slider-thumb { 
                            background-size: 55px; 
                            box-shadow: 0 0 5px rgba(0, 0, 0, 0.6), inset 0 -3px 3px ${hue_color};
                        }`;

    style.innerHTML += `.slider::-webkit-slider-thumb:hover { 
                            background-image: ${bg_hsla}; 
                            background-size: 55px; 
                        }`;

}



//TODO Wartości domyślne chyba mogłbyby być ładowane z konstruktora. Można to przerobić.
let obj = new hsla(180, 100, 50, 1);
obj.update(getSliderValue);
obj.update(getResultValue);
setColors();


/**
 * slidery .slider
 */
let sliders = document.getElementsByClassName("slider");
for (let i = 0; i < sliders.length; i++) {
    sliders[i].addEventListener('input', () => {
        obj.update(getSliderValue);
        setColors();
    });
}


/**
 * inputy .result
 */
let results = document.getElementsByClassName("result");
for (let i = 0; i < results.length; i++) {

    // Do wszystkich inputów result dodaję funkcję z kasowaniem tekstu po kliknięciu
    results[i].addEventListener('click', function () {
        this.value = null;
    })

    // Dodaję walidację wartości
    results[i].addEventListener('keypress', function (e) {
        allowNumbers(this, e);
        setInputRange(this, e, results[i].id)
    })

    // Dodaję funkcję colorMainBox przy wprowadzaniu wartości ręcznie do pola input
    results[i].addEventListener('input', () => {
        obj.update(getResultValue);
        setColors();
    });
}

/**
 * inputy .output
 */
let outputs = document.getElementsByClassName("output");
for (let i = 0; i < outputs.length; i++) {

    // Do wszystkich outputów dodaję funkcję z automatycznym zaznaczaniem tekstu po kliknięciu
    outputs[i].addEventListener('click', function () {
        this.select();

    })
}






/*
TODO
- Przemyśleć wywoływanie funkcji w całym skrypcie. Być może niektóre funkcje powinny się zawierać w innych itp.
- Zastanowić się nad konwersją HSLA na RGB(A). Ewentualnie możnaby skorzystać z gotowego rozwiązania (https://stackoverflow.com/questions/2353211/hsl-to-rgb-color-conversion)
 */