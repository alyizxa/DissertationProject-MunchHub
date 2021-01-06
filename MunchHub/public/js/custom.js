var loadImage = function(event) {
    var imgPreview = document.getElementById('imgPreview');
    imgPreview.src = URL.createObjectURL(event.target.files[0]);
};

window.onload = function () {


    var input = document.getElementById('autocomplete');
    var options = {types: ['(cities)']}
    var autocomplete = new google.maps.places.Autocomplete(input, options);
        
        autocomplete.setComponentRestrictions(
        {'country': ['dk']});
    google.maps.event.addListener(autocomplete, 'place_changed', function(){
        var place = autocomplete.getPlace();
    })}

$('.date').datepicker({

    format: 'mm-dd-yyyy'

});