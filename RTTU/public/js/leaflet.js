 var curlat;
 var curlng;
     function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    curlat = position.coords.latitude;
    curlng = position.coords.longitude;
    console.log( "Latitude: " + curlat + 
"<br>Longitude: " + curlng)
}
console.log( "Latitude: " + curlat + 
"<br>Longitude: " + curlng)
      

var map = L.map('map').setView([-6.935118, 107.766995], 15);
     L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
         maxZoom: 19,
         attribution: '© OpenStreetMap'
     }).addTo(map);

    //  add geocoder
     L.Control.geocoder().addTo(map);
     
     //fitur menambahkan marker sesuai database
     function addMarker(lat, lng, place){
         L.marker([lat, lng]).addTo(map)
         .bindPopup(
            "Nama : " + place + "<br>"+
         "<button onclick ='dariSini(); return keSini("+lat+","+lng+");'>Pergi ke sini</button>"
         );
     }
     coordinates.forEach(function(item){
        addMarker(item.lat, item.lng, item.name);
     });

     function dariSini(){
        console.log("fungsi kepanggil");
        var latLng=L.latLng(curlat,curlng);
        control.spliceWaypoints(0, 1, latLng);

     }

     function keSini(lat,lng){
        var latLng=L.latLng(lat,lng);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);

     }
        
     // fitur melihat lokasi user
     var lc = L.control.locate({
        strings : {
            popup:" Lokasi kamu di sini "},
        locateOptions: {
                enableHighAccuracy: true,
                cacheLocation : false
              }
        }).addTo(map);
        lc.start();

        console.log();


     // Fitur click kanan untuk memunculkan coordinate
    //  var popup = L.popup();
    //  function onMapClick(e) {
    //      popup
    //          .setLatLng(e.latlng)
    //          .setContent("You clicked the map at " + e.latlng.toString())
    //          .openOn(map);
    //  }
    //  map.on('contextmenu', onMapClick);

     //fitur melihat lokasi marker dari database
     
     function cari(id){
        coordinates.forEach(function(item){
         if(item.id == id)
             map.flyTo([item.lat, item.lng], 18,{
             animate:true,
             duration:3
            });
         });
     }
     function createButton(label, container) {
        var btn = L.DomUtil.create('button', '', container);
        btn.setAttribute('type', 'button');
        btn.innerHTML = label;
        return btn;
    }
    
     //fitur routing
     
     var control = L.Routing.control({
        waypoints: [
             L.latLng(curlat, curlng)
           
            
        ],
        routeWhileDragging: true,
        createMarker: function (i, wp, nWps){
           
            return L.marker(wp.latLng, {icon: new L.DivIcon({
                html: 
                    '<div> <img style="align:top;margin:-50px -10px" src="https://unpkg.com/leaflet@1.9.2/dist/images/marker-icon.png"> <span style="font-size:200%;" >'+String.fromCharCode(65+i)+'</span> </div>'
            }) });     
    },
        geocoder: L.Control.Geocoder.nominatim()
        });
        control.addTo(map);


        

        

        