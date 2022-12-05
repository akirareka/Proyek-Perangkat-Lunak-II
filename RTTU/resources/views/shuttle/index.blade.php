@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <!-- Leaflet js css -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css"integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="crossorigin=""/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />


        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #map { height: 700px; 
                width:1600px;
            margin-left: 150px; }
        </style>
    </head>
    @section('content')
    <body onLoad="getLocation()">
        
        <div style="margin-bottom:1% ; margin-left:2%; ">
         <t>Cari Halte</t><br>
         <select style="border-radius:5px;" name="" id="" onchange="cari(this.value)">
            <option value="">Pilih lokasi</option>
            @foreach($stops as $s)
            <option value="{{$s->id}}">{{$s->name}}</option>
            @endforeach
         </select>       
        </div>

        <div style="width:1200px ; height: 500px;"id="map"></div><br>
        @if(!empty($successMsg))
         <div class="alert alert-success"> {{ $successMsg }}</div>
        @endif
        
        <div>
            <h1>Rute shuttle : Jatinangor <-> Pasteur (via Tol) <-> Pool Shuttle </h1>
        </div>


    </body>
   
    <!-- Leaflet js  -->
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s="crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script>var coordinates = <?php echo json_encode($stops); ?>;</script>
    <script type="text/javascript" src="{{ asset('js/leaflet.js') }}"></script>
           

    
@endsection

</html>

