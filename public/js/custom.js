$('#toggle-nav').click(function () {
    $('#sidebar').addClass('show-sidebar');
    // $('#sidebar').toggle(200)

});

$('.close-sidebar').click(function () {
    $('#sidebar').removeClass('show-sidebar');

})

// function initialize() {
//     let propertiPeta = {
//         center: new google.maps.LatLng(-8.5830695, 116.3202515),
//         zoom: 9,
//         mapTypeId: google.maps.MapTypeId.ROADMAP
//     };

//     let peta = new google.maps.Map(document.getElementById("maps"), propertiPeta);
//     google.maps.event.addDomListener(window, 'load', initialize);
// }