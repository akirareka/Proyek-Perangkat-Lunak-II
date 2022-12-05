<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/Navbar.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="logo " style="margin-right : 40% ;">
            <a class="navbar-brand LogoRRTU" href="/">
                <img src="{{ asset('img/RRTU.png') }}" alt=" " class="d-inline-block align-text-top">
            </a>
        </div>
        <div class="content collapse navbar-collapse">
            <a class=" nav-link" href="#">TENTANG KAMI</a>
            <a class="nav-link" href="#transportasi">MODA TRANPORTASI</a>
            <a class="nav-link" href="#">TUJUAN AKHIR</a>
        </div>
    </nav>
    @yield('content')
    <center>
        
        <div class="">
        <div class="box3-3 row" id="transportasi">
            <center>
                <h1>METODE TRANSPORTASI</h1>
            </center>
            <div class="shuttle col" >
                <img src="{{ asset('img/gambar_shuttle.png') }}" alt="">
                <center>
                    <a href="/shuttle">
                        <button class="btn " type="button">SHUTTLE TRAVEL</button>
                    </a>
                </center>
            </div>
            <div class="biskota col">
                <img src="{{ asset('img/gambar_biskota.png') }}" alt="">
                <center>
                    <a href="/bus">
                        <button class="btn " type="button">BIS KOTA</button>
                    </a>
                </center>
            </div>
        </div>
            <section>
                <nav class="mid-RRTU">
                    <img src="{{ asset('img/RRTU.png') }}" alt=" ">
                </nav>
                <article class="RRTU-Penjelasan" style="padding:10% ; padding-top: 2%; padding-bottom: 2%;">
                    <h1>ROUTE RECCOMENDATION TO UNPAD</h1>
                    <p style="text-align: justify ;"> Aplikasi Route Reccomendation To Unpad (RRTU) adalah aplikasi
                        berbasis website yang
                        bertujuan untuk memberikan informasi rute ke Universitas Padjadjaran Dipatiukur dan
                        Jatinangor yang akan digunakan user. Terdapat dua moda transportasi yang dijadikan
                        perhitungan rekomendasi rute olehaplikasi Route Reccomendation To Unpad yaitu shuttle travel dan
                        bis kota.</p>
                </article>
            </section>
        </div>
        <div class="box2-2 row">
            <center>
                <h1>TUJUAN AKHIR</h1>
            </center>
            <div class="unpad1 col">
                <img src="{{ asset('img/Unpad1.png') }}" alt="">
                <center>
                    
                    <b>UNPAD JATINANGOR</b>
                    
                </center>
            </div>
            <div class="unpad2 col">
                <img src="{{ asset('img/Unpad2.png') }}" alt="">
                <center>
                    <b>UNPAD DIPATIUKUR</b>
                </center>
            </div>
        </div>
        
    </center>

    <footer class="row">
        <div class="col">
            <h5>CREDIT BY</h5>
            <p>Akirareka Kinantan Jiraiya </p>
            <p>Muhammad Hilmi Aufarahman </p>
            <p>Fadhillah Akbar Indrawan</p>
        </div>
        <div class="col">
            <h5>CUSTOMER CARE</h5>
            <p>Akirareka Kinantan Jiraiya </p>
            <p>Muhammad Hilmi Aufarahman </p>
            <p>Fadhillah Akbar Indrawan</p>
        </div>
        <div class="col">
            <h5>EXPLORE</h5>
            <p>Akirareka Kinantan Jiraiya </p>
            <p>Muhammad Hilmi Aufarahman </p>
            <p>Fadhillah Akbar Indrawan</p>
        </div>
        <center>
            <h1>ROUTE RECCOMENDATION TO UNPAD</h1>
        </center>
    </footer>
</body>

</html>