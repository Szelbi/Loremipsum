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
allowNumbers = function (object, event) {

    if (!(/[0-9,.]/.test(event.key)))
        event.preventDefault();

    let val = object.value;
}

/**
 * Ustawiam maksymalny zakres możliwych do wprowadzenia wartości.
 * Rozpatruję tylko przypadki dodatnie, ponieważ wcześniej już blokuję
 * możliwość wpisania znaku minus (-)
 * @param obj
 * @param e
 * @param rangeId
 */
setInputRange = function (obj, e, rangeId) {

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
getSliderValue = function (sliderId) {

    let slider = document.getElementById(sliderId);
    let result = document.getElementById(sliderId + "-result");

    let value = slider.value;
    result.value = value;

    return value;
}

/**
 * Pobieranie wartości HSLA na podstawie podanego id resulta
 */
getResultValue = function (sliderId) {

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

    updateSlidersColor();
}


/**
 * Ustawianie kolorów wszystkich slidrów
 */
updateSlidersColor = function () {

    /**
     * Alpha slider
     *  Ustawiam background slidera Hue na całą paletę HSL
     *  Robię to w JS żeby dynamicznie wygenerować paletę zamiast pisać długiego CSS z ~12 kolorami
     */
    let colors= [];
    for (let i = 0; i <= 360; i += 10) {
        let color = `hsla(${i} , ${obj.saturation}%, ${obj.lightness}%, ${obj.alpha})`;
        colors.push(color);
    }
    document.getElementById('hsl-h').style.background = `linear-gradient(
            to right, ${colors}), url(../img/alpha.png)`;

    /**
     * Saturation slider
     */
    document.getElementById("hsl-s").style.background = `linear-gradient(
            to right, 
            hsla(${obj.hue},0%,${obj.lightness}%,${obj.alpha}), 
            hsla(${obj.hue},100%,${obj.lightness}%,${obj.alpha})
        ), url(../img/alpha.png)`;

    /**
     * Lightness slider
     */
    document.getElementById("hsl-l").style.background = `linear-gradient(
            to right, 
            hsla(${obj.hue},${obj.saturation}%,0%,${obj.alpha}), 
            hsla(${obj.hue},${obj.saturation}%,50%,${obj.alpha}), 
            hsla(${obj.hue},${obj.saturation}%,100%,${obj.alpha})
        ), url(../img/alpha.png)`;


    /**
     * Alpha slider
     */
    document.getElementById("hsl-a").style.background = `linear-gradient(
            to right, 
            transparent, 
            hsla(${obj.hue},${obj.saturation}%,${obj.lightness}%,1)
        ), url(../img/alpha.png)`;

}


//TODO Wartości domyślne chyba mogłbyby być ładowane z konstruktora. Można to przerobić.
let obj = new hsla(180, 100, 50, 1);
obj.update(getSliderValue);
obj.update(getResultValue);
setBoxColor(obj);


/**
 * slidery .slider
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
        // this.select();
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
        setBoxColor(obj)
    });
}




/*
TODO
- Poprawić sekcję wynikową na dole. Dodać możliwość łatwego kopiowania.
- Poprawić 'rozmiar' (size) obrazka alpha4.
- Zabronić wprowadzania przecinków w inputach innych niż Alpha
 */