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
            "<button onclick ='return dariSini("+lat+","+lng+")'>Mulai di sini</button><br>"+
         "<button onclick ='return keSini("+lat+","+lng+")'>Pergi ke sini</button>"
         );
     }
     coordinates.forEach(function(item){
        addMarker(item.lat, item.lng, item.name);
     });

     function dariSini(lat,lng){
        var latLng=L.latLng(lat,lng);
        control.spliceWaypoints(0, 1, latLng);

     }

     function keSini(lat,lng){
        var latLng=L.latLng(lat,lng);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);

     }
        
     // fitur melihat lokasi user
     L.control.locate().addTo(map);

     // Fitur click untuk memunculkan coordinate
     var popup = L.popup();
     function onMapClick(e) {
         popup
             .setLatLng(e.latlng)
             .setContent("You clicked the map at " + e.latlng.toString())
             .openOn(map);
     }
     //fitur melihat lokasi marker
     map.on('contextmenu', onMapClick);
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
            L.latLng(-6.892946, 107.618074),
            //  L.latLng(-6.933951, 107.771266)
            
        ],
        routewhileDragging : true,
        geocoder: L.Control.Geocoder.nominatim()
        });
        control.addTo(map);


        

        

        