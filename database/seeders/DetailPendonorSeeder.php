<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DetailPendonor;

class DetailPendonorSeeder extends Seeder
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
                "id_pendonor"=> "P00001",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00001",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00001",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00001",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00001",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00002",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00002",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00002",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00002",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00002",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00003",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00003",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00003",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00003",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00003",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00004",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00004",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00004",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00004",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00004",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00005",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00005",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00005",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00005",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00005",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00006",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00006",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00006",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00006",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00006",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00007",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00007",
                "id_sub_kriteria"=> "SC09"
            ],
            [
                "id_pendonor"=> "P00007",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00007",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00007",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00008",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00008",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00008",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00008",
                "id_sub_kriteria"=> "SC14"
            ],
            [
                "id_pendonor"=> "P00008",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00009",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00009",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00009",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00009",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00009",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00010",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00010",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00010",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00010",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00010",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00011",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00011",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00011",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00011",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00011",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00012",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00012",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00012",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00012",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00012",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00013",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00013",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00013",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00013",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00013",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00014",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00014",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00014",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00014",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00014",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00015",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00015",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00015",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00015",
                "id_sub_kriteria"=> "SC14"
            ],
            [
                "id_pendonor"=> "P00015",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00016",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00016",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00016",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00016",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00016",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00017",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00017",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00017",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00017",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00017",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00018",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00018",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00018",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00018",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00018",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00019",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00019",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00019",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00019",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00019",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00020",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00020",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00020",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00020",
                "id_sub_kriteria"=> "SC14"
            ],
            [
                "id_pendonor"=> "P00020",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00021",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00021",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00021",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00021",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00021",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00022",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00022",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00022",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00022",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00022",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00023",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00023",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00023",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00023",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00023",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00024",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00024",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00024",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00024",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00024",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00025",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00025",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00025",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00025",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00025",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00026",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00026",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00026",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00026",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00026",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00027",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00027",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00027",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00027",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00027",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00028",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00028",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00028",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00028",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00028",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00029",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00029",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00029",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00029",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00029",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00030",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00030",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00030",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00030",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00030",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00031",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00031",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00031",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00031",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00031",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00032",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00032",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00032",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00032",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00032",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00033",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00033",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00033",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00033",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00033",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00034",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00034",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00034",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00034",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00034",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00035",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00035",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00035",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00035",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00035",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00036",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00036",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00036",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00036",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00036",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00037",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00037",
                "id_sub_kriteria"=> "SC09"
            ],
            [
                "id_pendonor"=> "P00037",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00037",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00037",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00038",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00038",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00038",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00038",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00038",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00039",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00039",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00039",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00039",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00039",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00040",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00040",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00040",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00040",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00040",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00041",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00041",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00041",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00041",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00041",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00042",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00042",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00042",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00042",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00042",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00043",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00043",
                "id_sub_kriteria"=> "SC10"
            ],
            [
                "id_pendonor"=> "P00043",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00043",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00043",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00044",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00044",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00044",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00044",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00044",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00045",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00045",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00045",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00045",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00045",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00046",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00046",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00046",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00046",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00046",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00047",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00047",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00047",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00047",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00047",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00048",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00048",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00048",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00048",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00048",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00049",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00049",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00049",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00049",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00049",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00050",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00050",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00050",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00050",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00050",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00051",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00051",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00051",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00051",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00051",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00052",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00052",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00052",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00052",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00052",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00053",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00053",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00053",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00053",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00053",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00054",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00054",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00054",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00054",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00054",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00055",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00055",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00055",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00055",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00055",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00056",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00056",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00056",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00056",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00056",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00057",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00057",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00057",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00057",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00057",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00058",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00058",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00058",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00058",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00058",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00059",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00059",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00059",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00059",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00059",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00060",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00060",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00060",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00060",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00060",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00061",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00061",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00061",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00061",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00061",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00062",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00062",
                "id_sub_kriteria"=> "SC10"
            ],
            [
                "id_pendonor"=> "P00062",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00062",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00062",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00063",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00063",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00063",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00063",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00063",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00064",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00064",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00064",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00064",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00064",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00065",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00065",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00065",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00065",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00065",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00066",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00066",
                "id_sub_kriteria"=> "SC10"
            ],
            [
                "id_pendonor"=> "P00066",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00066",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00066",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00067",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00067",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00067",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00067",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00067",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00068",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00068",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00068",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00068",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00068",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00069",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00069",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00069",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00069",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00069",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00070",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00070",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00070",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00070",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00070",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00071",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00071",
                "id_sub_kriteria"=> "SC09"
            ],
            [
                "id_pendonor"=> "P00071",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00071",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00071",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00072",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00072",
                "id_sub_kriteria"=> "SC09"
            ],
            [
                "id_pendonor"=> "P00072",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00072",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00072",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00073",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00073",
                "id_sub_kriteria"=> "SC10"
            ],
            [
                "id_pendonor"=> "P00073",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00073",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00073",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00074",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00074",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00074",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00074",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00074",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00075",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00075",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00075",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00075",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00075",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00076",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00076",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00076",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00076",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00076",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00077",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00077",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00077",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00077",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00077",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00078",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00078",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00078",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00078",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00078",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00079",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00079",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00079",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00079",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00079",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00080",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00080",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00080",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00080",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00080",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00081",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00081",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00081",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00081",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00081",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00082",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00082",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00082",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00082",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00082",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00083",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00083",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00083",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00083",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00083",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00084",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00084",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00084",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00084",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00084",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00085",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00085",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00085",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00085",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00085",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00086",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00086",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00086",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00086",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00086",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00087",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00087",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00087",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00087",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00087",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00088",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00088",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00088",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00088",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00088",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00089",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00089",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00089",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00089",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00089",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00090",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00090",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00090",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00090",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00090",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00091",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00091",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00091",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00091",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00091",
                "id_sub_kriteria"=> "SC16"
            ],
            [
                "id_pendonor"=> "P00092",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00092",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00092",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00092",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00092",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00093",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00093",
                "id_sub_kriteria"=> "SC09"
            ],
            [
                "id_pendonor"=> "P00093",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00093",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00093",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00094",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00094",
                "id_sub_kriteria"=> "SC09"
            ],
            [
                "id_pendonor"=> "P00094",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00094",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00094",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00095",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00095",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00095",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00095",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00095",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00096",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00096",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00096",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00096",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00096",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00097",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00097",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00097",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00097",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00097",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00098",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00098",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00098",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00098",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00098",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00099",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00099",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00099",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00099",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00099",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00100",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00100",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00100",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00100",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00100",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00101",
                "id_sub_kriteria"=> "SC04"
            ],
            [
                "id_pendonor"=> "P00101",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00101",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00101",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00101",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00102",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00102",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00102",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00102",
                "id_sub_kriteria"=> "SC14"
            ],
            [
                "id_pendonor"=> "P00102",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00103",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00103",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00103",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00103",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00103",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00104",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00104",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00104",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00104",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00104",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00105",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00105",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00105",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00105",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00105",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00106",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00106",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00106",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00106",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00106",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00107",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00107",
                "id_sub_kriteria"=> "SC08"
            ],
            [
                "id_pendonor"=> "P00107",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00107",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00107",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00108",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00108",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00108",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00108",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00108",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00109",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00109",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00109",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00109",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00109",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00110",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00110",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00110",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00110",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00110",
                "id_sub_kriteria"=> "SC19"
            ],
            [
                "id_pendonor"=> "P00111",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00111",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00111",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00111",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00111",
                "id_sub_kriteria"=> "SC20"
            ],
            [
                "id_pendonor"=> "P00112",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00112",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00112",
                "id_sub_kriteria"=> "SC23"
            ],
            [
                "id_pendonor"=> "P00112",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00112",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00113",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00113",
                "id_sub_kriteria"=> "SC07"
            ],
            [
                "id_pendonor"=> "P00113",
                "id_sub_kriteria"=> "SC24"
            ],
            [
                "id_pendonor"=> "P00113",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00113",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00114",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00114",
                "id_sub_kriteria"=> "SC10"
            ],
            [
                "id_pendonor"=> "P00114",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00114",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00114",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00115",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00115",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00115",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00115",
                "id_sub_kriteria"=> "SC13"
            ],
            [
                "id_pendonor"=> "P00115",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00116",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00116",
                "id_sub_kriteria"=> "SC10"
            ],
            [
                "id_pendonor"=> "P00116",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00116",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00116",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00117",
                "id_sub_kriteria"=> "SC05"
            ],
            [
                "id_pendonor"=> "P00117",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00117",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00117",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00117",
                "id_sub_kriteria"=> "SC17"
            ],
            [
                "id_pendonor"=> "P00118",
                "id_sub_kriteria"=> "SC03"
            ],
            [
                "id_pendonor"=> "P00118",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00118",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00118",
                "id_sub_kriteria"=> "SC11"
            ],
            [
                "id_pendonor"=> "P00118",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00119",
                "id_sub_kriteria"=> "SC01"
            ],
            [
                "id_pendonor"=> "P00119",
                "id_sub_kriteria"=> "SC06"
            ],
            [
                "id_pendonor"=> "P00119",
                "id_sub_kriteria"=> "SC21"
            ],
            [
                "id_pendonor"=> "P00119",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00119",
                "id_sub_kriteria"=> "SC18"
            ],
            [
                "id_pendonor"=> "P00120",
                "id_sub_kriteria"=> "SC02"
            ],
            [
                "id_pendonor"=> "P00120",
                "id_sub_kriteria"=> "SC09"
            ],
            [
                "id_pendonor"=> "P00120",
                "id_sub_kriteria"=> "SC22"
            ],
            [
                "id_pendonor"=> "P00120",
                "id_sub_kriteria"=> "SC12"
            ],
            [
                "id_pendonor"=> "P00120",
                "id_sub_kriteria"=> "SC19"
            ]
        ];

        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                $detail_pendonor = new DetailPendonor;
                $detail_pendonor->id_pendonor = $seed["id_pendonor"];
                $detail_pendonor->id_sub_kriteria = $seed["id_sub_kriteria"];
                $detail_pendonor->save();
                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                $ex->getMessage();
            }
        }
    }
}
