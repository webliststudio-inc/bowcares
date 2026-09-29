/// next page function ///

function _getNextPage(props) {
  const { page = "" } = props;
  sessionStorage.setItem("currentContactPage", page);
  _getPage({ page: page, url: siteMiddlewareUrl });
}
/////////////////////////////////////////////////////////////////////////////////////

let map;
let directionsService;
let directionsRenderer;
let destinationAutocomplete;

function initMap() {
  // Initialize map
  map = new google.maps.Map(document.getElementById("map"), {
    center: {
      lat: 31.9686,
      lng: -99.9018,
    },
    zoom: 7,
  });

  // Directions service
  directionsService = new google.maps.DirectionsService();
  // Directions renderer
  directionsRenderer = new google.maps.DirectionsRenderer({
    map: map,
  });
  // Destination autocomplete
  const destinationInput = document.getElementById("destination");
  if (destinationInput) {
    destinationAutocomplete = new google.maps.places.Autocomplete(
      destinationInput,
      {
        fields: ["formatted_address", "geometry", "name"],
      },
    );
    // Run ONLY when user selects a suggested address
    destinationAutocomplete.addListener("place_changed", function () {
      const place = destinationAutocomplete.getPlace();

      if (!place.geometry || !place.geometry.location) {
        console.log("No location found for selected address.");
        return;
      }
      // Calculate route
      getMapDetails();
    });
  }
}

function getMapDetails() {
  const pickup = "AfooTECH Global, Kotco, Ode-Remo, Nigeria";
  const destination = $("#destination").val().trim();

  if (!pickup || !destination) {
    return;
  }

  const request = {
    origin: pickup,
    destination: destination,
    travelMode: google.maps.TravelMode.DRIVING,
  };

  directionsService.route(request, function (result, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      // Display route
      directionsRenderer.setDirections(result);

      // Get route information
      const route = result.routes[0].legs[0];

      console.log(route);

      $("#output").html(`
                <b>start Address:</b> ${route.start_address}<br>
                <b>end Address:</b> ${route.end_address}<br>
        
                <b>Distance:</b> ${route.distance.text}<br>
                <b>Duration:</b> ${route.duration.text}
            `);
    } else {
      console.error("Directions request failed:", status);

      $("#output").html(`
                <span style="color:red;">
                    Unable to calculate route.
                </span>
            `);
    }
  });
}
