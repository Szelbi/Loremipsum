/**
 * Wyłącza widoczność elementy klasy .dropbtn jeśli klikniemy poka tym elementem
 * @param event
 */


window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
                openDropdown.style.display = "none";
        }
    }
}


/**
 * Jeśli kliknięty element jest klasy collapsible to włącza widoczność podrzędnego elementu
 * @type {HTMLCollectionOf<Element>}
 */
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");

        /**
         * TODO
         * To powinno zostać zmienione. Nie udało mi się inaczej sprawić żeby
         * po kliknięciu w inny dropdown-content ten poprzedni się zamykał.
         * Teraz działa to tak że najpierw zamykam wszystkie dropdown-content
         * a później otwierany jest ten właściwy.
         */
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            openDropdown.style.display = "none";
        }

        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }

    });
}


$('#menucontainer').click(function(event){
    event.stopPropagation();
});