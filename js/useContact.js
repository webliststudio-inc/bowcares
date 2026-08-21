/// next page function ///
function _getNextPage(props) {
    const { page = "" } = props;
    sessionStorage.setItem("currentContactPage", page);
    _getPage({ page: page, url: siteMiddlewareUrl });
}

let map;
let marker;
let autocomplete;

function initMap() {

    const input = document.getElementById("addressId");

    if (!input) {
        console.warn("Address input not ready. Retrying...");

        setTimeout(initMap, 300);
        return;
    }

    const defaultLocation = {
        lat: 37.8044,
        lng: -122.2712
    };

    map = new google.maps.Map(document.getElementById("map"), {
        center: defaultLocation,
        zoom: 13,
        disableDefaultUI: true
    });

    marker = new google.maps.Marker({
        map: map,
        position: defaultLocation
    });

    autocomplete = new google.maps.places.Autocomplete(input, {
        types: ["address"],
        componentRestrictions: {
            country: "us"
        },
        fields: [
            "formatted_address",
            "geometry",
            "place_id",
            "address_components"
        ]
    });

    autocomplete.addListener("place_changed", function () {

        const place = autocomplete.getPlace();

        if (!place.geometry || !place.geometry.location) {
            return;
        }

        const location = place.geometry.location;

        map.setCenter(location);
        map.setZoom(16);

        marker.setPosition(location);

        $("#addressId")
            .data("latitude", location.lat())
            .data("longitude", location.lng())
            .data("place-id", place.place_id);

        console.log({
            address: place.formatted_address,
            latitude: location.lat(),
            longitude: location.lng(),
            placeId: place.place_id
        });
    });
}