<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Routes;
use App\Models\Map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Map::create([
            'name' => "DU",
            'address' => "Dipatiukur no bla bla",
            'lat' => "-6.892946",
            'lng' => "107.618074",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Jatos",
            'address' => "Jatinangor bla bla",
            'lat' => "-6.933951",
            'lng' => "107.771266",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Diponegoro RRI",
            'address' => "Gedung Kantor RRI Bandung, Cihaur Geulis, Cibeunying Kaler, Bandung City, West Java 40122",
            'lat' => "-6.900707",
            'lng' => "107.624155",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Gereja GII Hok Im Tong Dago",
            'address' => "Jl. Cikapayang, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132",
            'lat' => "-6.898668",
            'lng' => "107.611939",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "TMB Surapati 04",
            'address' => "Jl. Prof. Dr. Mochtar Kusumaatmadja, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132",
            'lat' => "-6.899261",
            'lng' => "107.618066",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Taman Lansia",
            'address' => "Halte Perpustakaan Kementerian ESDM, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40122",
            'lat' => "-6.901060",
            'lng' => "107.619840",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Natasha Supratman",
            'address' => "Jl. Supratman No.78, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122",
            'lat' => "-6.903719",
            'lng' => "107.628234",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Yudda Wastu Pramuka",
            'address' => "Jl. Supratman 60, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114",
            'lat' => "-6.933951",
            'lng' => "107.771266",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Taman Pramuka A",
            'address' => "Jl. Taman Pramuka 178, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114",
            'lat' => "-6.910604",
            'lng' => "107.627394",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Supratman 1",
            'address' => "SMP Santa Ursula, Jl. Anggrek No.1, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114",
            'lat' => "-6.910180",
            'lng' => "107.632060",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Indomaret BKR",
            'address' => "Jl. BKR Lkr. Sel. 8-4, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265",
            'lat' => "-6.937263",
            'lng' => "107.622104",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Simpang By Pass Soekarno Hatta A",
            'address' => "JL Mohammad Toha, No. 19, Ciseureuh, Regol, Ciseureuh, Bandung, Kota Bandung, Jawa Barat 40255",
            'lat' => "-6.947486",
            'lng' => "107.609294",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Simpang Cileuny Atas",
            'address' => "Cileunyi, Cileunyi Wetan, Cileunyi, Bandung Regency, West Java 40622",
            'lat' => "-6.937445",
            'lng' => "107.756117",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "IPDN A",
            'address' => "JL Raya Jatinangor, No. 230, Jatinangor, Cibeusi, Bandung, Kabupaten Sumedang, Jawa Barat 45363",
            'lat' => "-6.935299",
            'lng' => "107.765215",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => " Halte HDL 293 Citarum",
            'address' => "Citarum, Bandung Wetan, Bandung City, West Java",
            'lat' => "-6.901118",
            'lng' => "107.624498",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte PT. Indonesia Comnets Plus",
            'address' => "Sukamaju, Cibeunying Kidul, Bandung City, West Java",
            'lat' => "-6.908033",
            'lng' => "107.631070",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Kiswah Umroh Wisata Syariah",
            'address' => "Kacapiring, Batununggal, Bandung City, West Java",
            'lat' => "-6.917383",
            'lng' => "107.630823",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Koperasi BKRKA",
            'address' => "Kacapiring, Batununggal, Bandung City, West Java",
            'lat' => "-6.918770",
            'lng' => "107.631296",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Hotel Sepuluh",
            'address' => "South Lingkar, Lengkong, Bandung City, West Java",
            'lat' => "-6.9306871",
            'lng' => "107.62622",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte TDC Telkomsel Pelajar Pejuang",
            'address' => "South Lingkar, Lengkong, Bandung City, West Java",
            'lat' => "-6.9318981",
            'lng' => "107.625753",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Hotel Benua",
            'address' => "Turangga, Lengkong, Bandung City, West Java",
            'lat' => "-6.932523",
            'lng' => "107.62565",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte PT. Citra Mandiri Selaras",
            'address' => "Cigereleng, Regol, Bandung City, West Java",
            'lat' => "-6.937660",
            'lng' => "107.609933",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Bkr Pt Inti",
            'address' => "Cigereleng, Kec. Regol, Kota Bandung, Jawa Barat",
            'lat' => "-6.937504",
            'lng' => "107.6083",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Sekolah Ganesha",
            'address' => "Pelindung Hewan, Astanaanyar, Bandung City, West Java",
            'lat' => "-6.938441",
            'lng' => "107.60613",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte J&T Express Moh Toha",
            'address' => "Karasak, Astanaanyar, Bandung City, West Java",
            'lat' => "-6.9525966",
            'lng' => "107.61095",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Jl H Tatang SumantKarasak, Astanaanyar, Bandung City, West Javari",
            'address' => "Karasak, Astanaanyar, Bandung City, West Java",
            'lat' => "-6.954393",
            'lng' => "107.61150",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Terminal Cileunyi",
            'address' => "Cileunyi Wetan, Cileunyi, Bandung Regency, West Java",
            'lat' => "-6.940291",
            'lng' => "107.75377",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Tugu Batas Kota Sumedang Bandung" ,
            'address' => "Cileunyi Wetan, Cileunyi, Bandung Regency, West Java",
            'lat' => "-6.937592",
            'lng' => "107.75718",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Tugu Perbatasan Bandung Sumedang" ,
            'address' => "Cibeusi, Jatinangor, Sumedang Regency, West Java",
            'lat' => "-6.937863",
            'lng' => "107.75716",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte IPDN B",
            'address' => "Cibeusi, Jatinangor, Sumedang Regency, West Java",
            'lat' => "-6.935727",
            'lng' => "107.76507",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Griya Jatinangor",
            'address' => "Sayang, Jatinangor, Sumedang Regency, West Java",
            'lat' => "-6.934667",
            'lng' => "107.76835",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Pangkalan Ojeg UNPAD",
            'address' => "Sayang, Jatinangor, Sumedang Regency, West Java",
            'lat' => "-6.932857",
            'lng' => "107.77191",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Pangkalan Bus Damri Jatinagor",
            'address' => "Cikeruh, Jatinangor, Sumedang Regency, West Java",
            'lat' => "-6.9319198",
            'lng' => "107.7731",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Halte Bus Damri Jatinangor",
            'address' => "Jl. Raya Cirebon - Bandung No.176, Cikeruh, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363",
            'lat' => "-6.931423",
            'lng' => "107.775768",
            'kendaraan' => "Bus"
        ]);
        Map::create([
            'name' => "Baltos",
            'address' => "Jatinangor bla bla",
            'lat' => "-6.898862",
            'lng' => "107.609295",
            'kendaraan' => "Shuttle"
        ]);
        Map::create([
            'name' => "Arnes Shuttle Jatinangor",
            'address' => "Jl. Raya Bandung - Sumedang No.222, Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363",
            'lat' => "-6.933291997247869",
            'lng' => "107.77404716183632",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Arnes Shuttle Baltos",
            'address' => "Baltos, Balubur Town Square, Jl. Tamansari No 2, Tamansari, Bandung Wetan, Bandung, Jawa Barat 40116",
            'lat' => "-6.898462423135006",
            'lng' => "107.60870726609858",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Pasteur Trans Jatinangor",
            'address' => "Jl. Kolonel Ahmad Syam, Cikeruh, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363",
            'lat' => "-6.93352636359923",
            'lng' => "107.7729832989932",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Pasteur Trans Dipatiukur",
            'address' => "Jl. Dipati Ukur No.100, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40251",
            'lat' => "-6.885135074631032",
            'lng' => "107.61411453146928",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Pasteur Trans Pasteur",
            'address' => "Jl. Dr. Djunjunan No.77, Pajajaran, Kec. Cicendo, Kota Bandung, Jawa Barat 40161",
            'lat' => "-6.896687518451819",
            'lng' => "107.59075378348024",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Krakaline Shuttle Jatinangor",
            'address' => "Jl. Kol Achmad Syam No.19, Cikeruh, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363",
            'lat' => "-6.934680818413035",
            'lng' => "107.7733956488663",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Krakaline Shuttle Buah Batu",
            'address' => "Jl. Terusan Buah Batu sebrang No.213, Kujangsari, yomart, Kota Bandung, Jawa Barat 40287",
            'lat' => "-6.959914584046392",
            'lng' => "107.63928910075865",
            'kendaraan' => "Shuttle"
        ]); 

        Map::create([
            'name' => "Bhinneka Shuttle Point Jatinangor",
            'address' => "Jl. Raya Jatinangor No.174, Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363",
            'lat' => "-6.932522072859319",
            'lng' => "107.77597072562011",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Bhinneka Shuttle Buah Batu",
            'address' => "Jl. Terusan Buah Batu No.227, Kujangsari, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40287",
            'lat' => "-6.960492198454588",
            'lng' => "107.63918784984024",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Sahabat Shuttle Jatinangor",
            'address' => "Jl. Raya Jatinangor No.182, Cikeruh, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363",
            'lat' => "-6.933222044984461",
            'lng' => "107.77362501992167",
            'kendaraan' => "Shuttle"
        ]);

        Map::create([
            'name' => "Sahabat Shuttle Cihampelas",
            'address' => "Jl. Cihampelas No.42e, Pasir Kaliki, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116",
            'lat' => "-6.903113113613176",
            'lng' => "107.6045019810691",
            'kendaraan' => "Shuttle"
        ]);
    }
}
