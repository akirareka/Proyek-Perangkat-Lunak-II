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
         "<button onclick ='return keSini("+lat+","+lng+")'>Pergi ke sini</button>"+
         "<button onclick ='return addStops("+lat+","+lng+")'>Tambah pemberhentian</button><br>"
         );
     }
     coordinates.forEach(function(item){
        addMarker(item.lat, item.lng, item.name);
     });

     function dariSini(lat,lng){
        var latLng=L.latLng(lat,lng);
        control.spliceWaypoints(0, 1, latLng);

     }

     function addStops(lat,lng){
        var i = 1;
        var latLng=L.latLng(lat,lng);
        control.spliceWaypoints(i, 0, latLng);
        i+=1;
        console.log(i)

     }

     function keSini(lat,lng){
        var latLng=L.latLng(lat,lng);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);

     }
        
     // fitur melihat lokasi user
     var lc = L.control.locate({
        strings : {
            popup:" Lokasi kamu di sini "}
        }).addTo(map);
        lc.start();

    //  var lcPopup = L.popup();
    //  function fromCurLoc(e) {
    //     var coords = e.latlng
    //     lcPopup
    //         .setLatLng(e.latlng)
    //         .setContent("<button onclick ='return dariSini("+coords.lat+","+coords.lng+")'>Mulai di sini</button><br>"+
    //         "<button onclick ='return keSini("+coords.lat+","+coords.lng+")'>Pergi ke sini</button>"+
    //         "<button onclick ='return addStops("+coords.lat+","+coords.lng+")'>Tambah pemberhentian</button><br>")
    //         .openOn(map);
    // }
    //  map.on('click', fromCurLoc);

     // Fitur click kanan untuk memunculkan coordinate
     var popup = L.popup();
     function onMapClick(e) {
         popup
             .setLatLng(e.latlng)
             .setContent("You clicked the map at " + e.latlng.toString())
             .openOn(map);
     }
     map.on('contextmenu', onMapClick);

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
            // L.latLng(-6.936436, 107.765185),
            //  L.latLng(-6.933951, 107.771266)
            
        ],
        createMarker: function (i, wp, nWps){
           
            return L.marker(wp.latLng, {icon: new L.DivIcon({
                html: 
                    '<div> <img style="" src="https://unpkg.com/leaflet@1.9.2/dist/images/marker-icon.png"> <span style="font-size:200%;" >'+String.fromCharCode(65+i)+'</span> </div>'
            }) });     
    },
        geocoder: L.Control.Geocoder.nominatim()
        });
        control.addTo(map);


        

        

        