/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
import { MarkerClusterer } from "https://cdn.skypack.dev/@googlemaps/markerclusterer@2.0.3";

function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 5,
    center: { lat: 24.740368799806674, lng: -98.84946664758593 },
  });
  const infoWindow = new google.maps.InfoWindow({
    content: "",
    disableAutoPan: true,
  });
  // Create an array of alphabetical characters used to label the markers.
  const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  // Add some markers to the map.
  const markers = locations.map((position, i) => {
    const label = labels[i % labels.length];
    const marker = new google.maps.Marker({
      position,
      label,
    });

    // markers can only be keyboard focusable when they have click listeners
    // open info window when marker is clicked
    marker.addListener("click", () => {
      infoWindow.setContent(label);
      infoWindow.open(map, marker);
    });
    return marker;
  });

  // Add a marker clusterer to manage the markers.
  new MarkerClusterer({ markers, map });
}

const locations = [
  { lat: 21.87919539675253,  lng: -102.26287428465727 },
  { lat: 22.16159051885047,  lng: -102.26890162956325 },
  { lat: 21.819497070723934, lng: -102.100147002582 },
  { lat: 21.839939932023704, lng: -102.35340914676014 },
  { lat: 21.83926187448803,  lng: -102.15898927374609 },
  { lat: 21.805473970759248, lng: -102.29547970258226 },
  
  { lat: 31.807946334014908, lng: -116.5900474987089 },
  { lat: 32.62095191890497,  lng: -115.39603836006228 },
  
  { lat: 22.91723688737842,  lng: -109.92955528154867 },
  
  { lat: 23.02923241164098,  lng: -109.92886278010876 },
  { lat: 19.79160386897842,  lng: -90.62181780260819 },
  { lat: 20.345004474823593, lng: -90.04462277376564 },
  { lat: 16.213974022514495, lng: -92.11015817381082 },
  
  { lat: 28.41149172410704,  lng: -106.8999614601469 },
  { lat: 28.662246879748956, lng: -106.08108958897797 },
  { lat: 28.709672280308006, lng: -106.11001893130567 },
  { lat: 28.550876628150426, lng: -106.80508305249 },
  { lat: 28.662237465598487, lng: -106.08103594479958 },
  { lat: 28.70970991985047,  lng: -106.11000820247 },
  
  { lat: 28.661546095302146, lng: -106.03582218897795 },
  { lat: 31.59934037233444, lng: -106.4063278754267 },
  { lat: 31.599331234230803, lng: -106.40620985823426 },
  { lat: 19.462311461139972, lng: -99.06160681610508 },
];

window.initMap = initMap;
