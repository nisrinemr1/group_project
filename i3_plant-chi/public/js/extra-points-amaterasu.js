'use strict';

const addElement = (weather) => {

    const id = `Elem-${weather.date}`;
    const urlImage = weather.icon;
    const altImage = weather.condition;
    const dayOfWeek = weather.day_long;
    
    $("#myTable").append("<tr id='" + id + "'>"
        + "<td><img src='" + urlImage + "' alt='" + altImage + "'></td>"
        + "<td>" + dayOfWeek + "<td>"
    + "</tr>");
}

const URL_WEATHER = "https://www.prevision-meteo.ch/services/json/lat=46.259lng=5.235";


$("#myButton").click(function () {

    $("#myTable").empty();
    
    /* addElement({ 
        date: "20.10.2021", 
        icon: "https://prevision-meteo.ch/style/images/icon/eclaircies.png",
        condition: "Eclaircies",
        day_long: "Mercredi"
    }); */

    axios.get(URL_WEATHER)
    .then(function (response) {
        // Affichage des donnees de la response d'axios
        console.log(response.data);

        // Donnee qui nous interesse
        console.log(response.data.fcst_day_0);

        // Ajout des donnees sur le tableau
        for(let i = 0; i < 5; i++) {
            const name = "fcst_day_" + i;
            console.log(name);

            // Le JavaScript permet d'acceder aux proprietes d'un objet via []
            // => Cela permet d'utiliser une variable comme nom de propriete 
            //data is a part of response 
            addElement(response.data[name]);

            
        }

    })

});

$(document).ready(function () {
    $("#myButton").click(function () {
        $("#explanationAmaterasu").fadeToggle('slow', function(){
            $("#weather").fadeToggle('slow');
        });
        
    });
});