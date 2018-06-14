$(function(){
    $('.property-box-nav a').click(function(){
        var _this = $(this);

        $('.property-box-nav a').removeClass('active');

        _this.addClass('active');

        var this_href = _this.attr('href');

        $('.property-box-tab').removeClass('active');

        $(this_href).addClass('active');

        return false;
    })

    $('.property-box-slideshow').flexslider({
        animation: "slide",
        directionNav: false
    });

    if ($('.customMap').length) {
        google.maps.event.addDomListener(window, 'load', initMap);
    };

    $( "#datepicker" ).datepicker();
});

function initMap(map, properties) {      
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({
        'address': document.getElementById("address").innerHTML
    }, function (result, status) {
        if (status == google.maps.GeocoderStatus.OK) {

            var mapOptions = {
                center: result[0].geometry.location,
                position: result[0].geometry.location,
                zoom: 14,
                minZoom: 3,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            };

            var mapStyle = [
                {
                    featureType: 'all',
                    elementType: 'all',
                    stylers: [
                        {
                            saturation: -100
                        }
                    ]
                }
            ];

            var mapContainer = document.getElementsByClassName('customMap')[0];

            var map = new google.maps.Map(mapContainer, mapOptions);

            var mapType = new google.maps.StyledMapType(mapStyle, {name: 'Map'});

            var infowindow = new google.maps.InfoWindow({
                maxWidth: 355
            });

            var marker = new google.maps.Marker({
                animation: google.maps.Animation.DROP,
                position: result[0].geometry.location,
                map: map,
                clickable: true
            });
        }
    });
};