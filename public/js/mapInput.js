function initializeGooglePlacesAPI(){
    if($("#address").length){
        console.log('initializeGooglePlacesAPI')
        var input = document.getElementById('address');

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.setComponentRestrictions({'country': ['in']});

        google.maps.event.addListener(autocomplete, 'place_changed', function(){

            validAddr = true;
            var place = autocomplete.getPlace();
            console.log(place);
            $('#address').val(place.formatted_address)

            for (var i = 0; i < place.address_components.length; i++) {
                //console.log('dasdad');
                for (var j = 0; j < place.address_components[i].types.length; j++) {
                    console.log(place.address_components[i].types[j],'place.address_components[i].types[j]');
                    console.log(place.address_components[i])
                    if (place.address_components[i].types[j] == "locality") {
                        // document.getElementById('city').innerHTML = place.address_components[i].long_name;
                        $('#city').val(place.address_components[i].long_name);
                    }

                    if (place.address_components[i].types[j] == "country") {
                        $('#country').val(place.address_components[i].long_name);
                        // document.getElementById('country').innerHTML = place.address_components[i].long_name;
                    }

                    if (place.address_components[i].types[j] == "administrative_area_level_1") {
                        $('#state').val(place.address_components[i].long_name);
                        // document.getElementById('state').innerHTML = place.address_components[i].long_name;
                    }
                    if (place.address_components[i].types[j] == "postal_code") {
                        console.log(place.address_components[i].long_name)
                        $('#postal_code').val(place.address_components[i].long_name);
                        // document.getElementById('state').innerHTML = place.address_components[i].long_name;
                    }
                    let latitude = place.geometry.location.lat();
                    let longitude = place.geometry.location.lng();
                    // let postal_code = place.geometry.short_name;
                    // console.log(postal_code)
                    // console.log(place.address_components[i].long_name)
                    // console.log(latitude)
                    // console.log(longitude)
                    $('#latitude').val(latitude);
                    $('#longitude').val(longitude);

                }
            }
        });
    }
}