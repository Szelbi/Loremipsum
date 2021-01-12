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
document.getElementById('hsl-a-result').addEventListener('input', function() {
    this.value = this.value.replace(/,/g, '.')
    }
);



inputFilter = function(object, event){


    if(!(/[0-9]/.test(event.key)))
        event.preventDefault();


    let val = object.value;

    // if(val > 10)
    //     event.preventDefault();

    console.log(object.value);



    // if(event.key === 0 || event.key === '0')
    //     return false;
    //
    // if(event.key === 'a') {
    //     console.log('aaaaa');
    //     return false;
    // }

    // object.value = object.value.replace(/\D/g, "");


    // object.value = oldVal.replace(//)

    // if(elemId === "hsl-h-result")
    //     console.log(elemId);
    //
    // if(elemId === "hsl-a-result")
    //     console.log("a");

    // let val = document.getElementById(elemId).value;
    // console.log(val);
    // if (val > 1000)
    //     return '';

}


// Restricts input for the given textbox to the given inputFilter.
// function setInputFilter(textbox, inputFilter) {
//     ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
//         textbox.addEventListener(event, function() {
//             if (inputFilter(this.value)) {
//                 this.oldValue = this.value;
//                 this.oldSelectionStart = this.selectionStart;
//                 this.oldSelectionEnd = this.selectionEnd;
//             } else if (this.hasOwnProperty("oldValue")) {
//                 this.value = this.oldValue;
//                 this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
//             } else {
//                 this.value = "";
//             }
//         });
//     });
// }

// Install input filters.
// setInputFilter(document.getElementById("hsl-h-result"), function(value) {
//     return /^-?\d*$/.test(value); });
// setInputFilter(document.getElementById("uintTextBox"), function(value) {
//     return /^\d*$/.test(value); });
// setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
//     return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
// setInputFilter(document.getElementById("floatTextBox"), function(value) {
//     return /^-?\d*[.,]?\d*$/.test(value); });
// setInputFilter(document.getElementById("currencyTextBox"), function(value) {
//     return /^-?\d*[.,]?\d{0,2}$/.test(value); });
// setInputFilter(document.getElementById("latinTextBox"), function(value) {
//     return /^[a-z]*$/i.test(value); });
// setInputFilter(document.getElementById("hexTextBox"), function(value) {
//     return /^[0-9a-f]*$/i.test(value); });




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

    // Dodaję walidację wartości
    results[i].addEventListener('keypress', function (e) {
        inputFilter(this, e)
    })

    // Dodaję funkcję colorMainBox przy wprowadzaniu wartości ręcznie do pola input
    results[i].addEventListener('input', () => {
        obj.update(getResultValue);
        setBoxColor(obj)
    });

}



/*
TODO
Dodać ograniczenia do wprowadzania tylko wartości z określonego zakresu (np max 100)
 */


