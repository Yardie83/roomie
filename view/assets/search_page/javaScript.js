/**
 * Created by Tobias on 07.01.2018.
 */


function activatePlacesSearch() {
    var input = document.getElementByID('search_term');
    var autocomplete = new google.maps.places.Autocomplete(input);
}

function returnCharThree() {
        var str = document.getElementByID('search_term');

        alert(str.charAt(2));
}