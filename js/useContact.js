/// next page function ///
let map, directionsService, directionsRenderer;

function _getNextPage(props) {
  const { page = "" } = props;
  sessionStorage.setItem("currentContactPage", page);
  _getPage({ page: page, url: siteMiddlewareUrl });
}
/////////////////////////////////////////////////////////////////////////////////////

function initMap() {
  // Map setup
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 6.5244, lng: 3.3792 }, // Lagos default
    zoom: 7,
  });

  directionsService = new google.maps.DirectionsService();
  directionsRenderer = new google.maps.DirectionsRenderer();
  directionsRenderer.setMap(map);

  // Autocomplete for both fields
  new google.maps.places.Autocomplete(document.getElementById("pickup"));
  new google.maps.places.Autocomplete(document.getElementById("destination"));
}

function getMapDetails() {
  const pickup = "AfooTECH Global, Kotco, Ode-Remo, Nigeria";
  const destination = $("#destination").val();

  if (!pickup || !destination) {
    return;
  }

  let request = {
    origin: pickup,
    destination: destination,
    travelMode: google.maps.TravelMode.DRIVING,
  };

  directionsService.route(request, function (result, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsRenderer.setDirections(result);
      let route = result.routes[0].legs[0];
      console.log(route);
      $("#output").html(`
            <b>start_address:</b> ${route.start_address} <br>
            <b>end_address:</b> ${route.end_address} <br>

            <b>Distance:</b> ${route.distance.text} <br>
            <b>Duration:</b> ${route.duration.text}
        `);
    }
  });
}
