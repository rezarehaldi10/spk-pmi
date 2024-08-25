<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DetailHasilPerhitungan;

class DetailHasilPerhitunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = (object)[
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00001",
                "id_pendonor"=> "P00001",
                "yi"=> "0.515",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00001",
                "id_pendonor"=> "P00002",
                "yi"=> "0.476",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00001",
                "id_pendonor"=> "P00003",
                "yi"=> "0.668",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00002",
                "id_pendonor"=> "P00004",
                "yi"=> "0.462",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00002",
                "id_pendonor"=> "P00005",
                "yi"=> "0.662",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00002",
                "id_pendonor"=> "P00006",
                "yi"=> "0.557",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00003",
                "id_pendonor"=> "P00007",
                "yi"=> "0.538",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00003",
                "id_pendonor"=> "P00008",
                "yi"=> "0.501",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00003",
                "id_pendonor"=> "P00009",
                "yi"=> "0.658",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00004",
                "id_pendonor"=> "P00010",
                "yi"=> "0.447",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00004",
                "id_pendonor"=> "P00011",
                "yi"=> "0.668",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00004",
                "id_pendonor"=> "P00012",
                "yi"=> "0.566",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00005",
                "id_pendonor"=> "P00013",
                "yi"=> "0.499",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00005",
                "id_pendonor"=> "P00014",
                "yi"=> "0.636",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00005",
                "id_pendonor"=> "P00015",
                "yi"=> "0.518",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00006",
                "id_pendonor"=> "P00016",
                "yi"=> "0.389",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00006",
                "id_pendonor"=> "P00017",
                "yi"=> "0.564",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00006",
                "id_pendonor"=> "P00018",
                "yi"=> "0.698",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00007",
                "id_pendonor"=> "P00019",
                "yi"=> "0.531",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00007",
                "id_pendonor"=> "P00020",
                "yi"=> "0.578",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00007",
                "id_pendonor"=> "P00021",
                "yi"=> "0.533",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00008",
                "id_pendonor"=> "P00022",
                "yi"=> "0.664",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00008",
                "id_pendonor"=> "P00023",
                "yi"=> "0.430",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00008",
                "id_pendonor"=> "P00024",
                "yi"=> "0.580",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00009",
                "id_pendonor"=> "P00025",
                "yi"=> "0.649",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00009",
                "id_pendonor"=> "P00101",
                "yi"=> "0.444",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00009",
                "id_pendonor"=> "P00102",
                "yi"=> "0.583",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00010",
                "id_pendonor"=> "P00103",
                "yi"=> "0.504",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00010",
                "id_pendonor"=> "P00104",
                "yi"=> "0.562",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00010",
                "id_pendonor"=> "P00105",
                "yi"=> "0.639",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00011",
                "id_pendonor"=> "P00026",
                "yi"=> "0.504",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00011",
                "id_pendonor"=> "P00027",
                "yi"=> "0.515",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00011",
                "id_pendonor"=> "P00028",
                "yi"=> "0.673",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00012",
                "id_pendonor"=> "P00029",
                "yi"=> "0.555",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00012",
                "id_pendonor"=> "P00030",
                "yi"=> "0.729",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00012",
                "id_pendonor"=> "P00031",
                "yi"=> "0.358",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00013",
                "id_pendonor"=> "P00032",
                "yi"=> "0.491",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00013",
                "id_pendonor"=> "P00033",
                "yi"=> "0.484",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00013",
                "id_pendonor"=> "P00034",
                "yi"=> "0.688",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00014",
                "id_pendonor"=> "P00035",
                "yi"=> "0.583",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00014",
                "id_pendonor"=> "P00036",
                "yi"=> "0.602",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00014",
                "id_pendonor"=> "P00037",
                "yi"=> "0.520",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00015",
                "id_pendonor"=> "P00038",
                "yi"=> "0.578",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00015",
                "id_pendonor"=> "P00039",
                "yi"=> "0.585",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00015",
                "id_pendonor"=> "P00040",
                "yi"=> "0.470",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00016",
                "id_pendonor"=> "P00041",
                "yi"=> "0.565",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00016",
                "id_pendonor"=> "P00042",
                "yi"=> "0.539",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00016",
                "id_pendonor"=> "P00043",
                "yi"=> "0.523",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00017",
                "id_pendonor"=> "P00044",
                "yi"=> "0.563",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00017",
                "id_pendonor"=> "P00045",
                "yi"=> "0.528",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00017",
                "id_pendonor"=> "P00046",
                "yi"=> "0.578",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00018",
                "id_pendonor"=> "P00047",
                "yi"=> "0.599",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00018",
                "id_pendonor"=> "P00048",
                "yi"=> "0.421",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00018",
                "id_pendonor"=> "P00049",
                "yi"=> "0.646",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00019",
                "id_pendonor"=> "P00050",
                "yi"=> "0.621",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00019",
                "id_pendonor"=> "P00106",
                "yi"=> "0.402",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00019",
                "id_pendonor"=> "P00107",
                "yi"=> "0.629",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00020",
                "id_pendonor"=> "P00108",
                "yi"=> "0.571",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00020",
                "id_pendonor"=> "P00109",
                "yi"=> "0.589",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00020",
                "id_pendonor"=> "P00110",
                "yi"=> "0.543",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00021",
                "id_pendonor"=> "P00051",
                "yi"=> "0.628",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00021",
                "id_pendonor"=> "P00052",
                "yi"=> "0.384",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00021",
                "id_pendonor"=> "P00053",
                "yi"=> "0.628",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00022",
                "id_pendonor"=> "P00054",
                "yi"=> "0.542",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00022",
                "id_pendonor"=> "P00055",
                "yi"=> "0.488",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00022",
                "id_pendonor"=> "P00056",
                "yi"=> "0.651",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00023",
                "id_pendonor"=> "P00057",
                "yi"=> "0.618",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00023",
                "id_pendonor"=> "P00058",
                "yi"=> "0.507",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00023",
                "id_pendonor"=> "P00059",
                "yi"=> "0.535",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00024",
                "id_pendonor"=> "P00060",
                "yi"=> "0.674",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00024",
                "id_pendonor"=> "P00061",
                "yi"=> "0.530",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00024",
                "id_pendonor"=> "P00062",
                "yi"=> "0.476",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00025",
                "id_pendonor"=> "P00063",
                "yi"=> "0.596",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00025",
                "id_pendonor"=> "P00064",
                "yi"=> "0.577",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00025",
                "id_pendonor"=> "P00065",
                "yi"=> "0.538",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00026",
                "id_pendonor"=> "P00066",
                "yi"=> "0.329",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00026",
                "id_pendonor"=> "P00067",
                "yi"=> "0.724",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00026",
                "id_pendonor"=> "P00068",
                "yi"=> "0.548",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00027",
                "id_pendonor"=> "P00069",
                "yi"=> "0.429",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00027",
                "id_pendonor"=> "P00070",
                "yi"=> "0.583",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00027",
                "id_pendonor"=> "P00071",
                "yi"=> "0.636",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00028",
                "id_pendonor"=> "P00072",
                "yi"=> "0.648",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00028",
                "id_pendonor"=> "P00073",
                "yi"=> "0.324",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00028",
                "id_pendonor"=> "P00074",
                "yi"=> "0.621",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00029",
                "id_pendonor"=> "P00075",
                "yi"=> "0.613",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00029",
                "id_pendonor"=> "P00111",
                "yi"=> "0.538",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00029",
                "id_pendonor"=> "P00112",
                "yi"=> "0.530",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00030",
                "id_pendonor"=> "P00113",
                "yi"=> "0.521",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00030",
                "id_pendonor"=> "P00114",
                "yi"=> "0.479",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00030",
                "id_pendonor"=> "P00115",
                "yi"=> "0.640",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00031",
                "id_pendonor"=> "P00076",
                "yi"=> "0.509",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00031",
                "id_pendonor"=> "P00077",
                "yi"=> "0.569",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00031",
                "id_pendonor"=> "P00078",
                "yi"=> "0.636",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00032",
                "id_pendonor"=> "P00079",
                "yi"=> "0.521",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00032",
                "id_pendonor"=> "P00080",
                "yi"=> "0.505",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00032",
                "id_pendonor"=> "P00081",
                "yi"=> "0.668",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00033",
                "id_pendonor"=> "P00082",
                "yi"=> "0.601",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00033",
                "id_pendonor"=> "P00083",
                "yi"=> "0.489",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00033",
                "id_pendonor"=> "P00084",
                "yi"=> "0.618",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00034",
                "id_pendonor"=> "P00085",
                "yi"=> "0.614",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00034",
                "id_pendonor"=> "P00086",
                "yi"=> "0.614",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00034",
                "id_pendonor"=> "P00087",
                "yi"=> "0.460",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00035",
                "id_pendonor"=> "P00088",
                "yi"=> "0.528",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00035",
                "id_pendonor"=> "P00089",
                "yi"=> "0.522",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00035",
                "id_pendonor"=> "P00090",
                "yi"=> "0.619",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00036",
                "id_pendonor"=> "P00091",
                "yi"=> "0.709",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00036",
                "id_pendonor"=> "P00092",
                "yi"=> "0.367",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00036",
                "id_pendonor"=> "P00093",
                "yi"=> "0.566",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00037",
                "id_pendonor"=> "P00094",
                "yi"=> "0.498",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00037",
                "id_pendonor"=> "P00095",
                "yi"=> "0.602",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00037",
                "id_pendonor"=> "P00096",
                "yi"=> "0.600",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00038",
                "id_pendonor"=> "P00097",
                "yi"=> "0.512",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00038",
                "id_pendonor"=> "P00098",
                "yi"=> "0.618",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00038",
                "id_pendonor"=> "P00099",
                "yi"=> "0.544",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00039",
                "id_pendonor"=> "P00100",
                "yi"=> "0.583",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00039",
                "id_pendonor"=> "P00116",
                "yi"=> "0.502",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00039",
                "id_pendonor"=> "P00117",
                "yi"=> "0.584",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A1",
                "id_hasil_perhitungan"=> "HP00040",
                "id_pendonor"=> "P00118",
                "yi"=> "0.614",
                "ranking"=> "2",
                "status"=> "Tidak Lolos"
            ],
            [
                "kode_alternatif"=> "A2",
                "id_hasil_perhitungan"=> "HP00040",
                "id_pendonor"=> "P00119",
                "yi"=> "0.630",
                "ranking"=> "1",
                "status"=> "Lolos"
            ],
            [
                "kode_alternatif"=> "A3",
                "id_hasil_perhitungan"=> "HP00040",
                "id_pendonor"=> "P00120",
                "yi"=> "0.455",
                "ranking"=> "3",
                "status"=> "Tidak Lolos"
            ]
            ];
        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                $detail_hasil_perhitungan = new DetailHasilPerhitungan;
                $detail_hasil_perhitungan->kode_alternatif = $seed["kode_alternatif"];
                $detail_hasil_perhitungan->id_hasil_perhitungan = $seed["id_hasil_perhitungan"];
                $detail_hasil_perhitungan->id_pendonor = $seed["id_pendonor"];
                $detail_hasil_perhitungan->yi = $seed["yi"];
                $detail_hasil_perhitungan->ranking = $seed["ranking"];
                $detail_hasil_perhitungan->status = $seed["status"];
                $detail_hasil_perhitungan->save();
                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                echo $ex->getMessage();
            }
        }
    }
}
