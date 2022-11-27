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
    }
}
