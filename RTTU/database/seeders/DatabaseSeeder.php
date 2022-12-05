<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
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
        DB::table('stops')->truncate();
        
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
            'name' => "Baltos",
            'address' => "Jatinangor bla bla",
            'lat' => "-6.898862",
            'lng' => "107.609295",
            'kendaraan' => "Shuttle"
        ]);
    }
}
