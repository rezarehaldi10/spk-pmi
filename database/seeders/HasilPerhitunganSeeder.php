<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\HasilPerhitungan;

class HasilPerhitunganSeeder extends Seeder
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
                "id_hasil_perhitungan"=> "HP00001",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00002",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00003",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00004",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00005",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00006",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00007",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00008",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00009",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00010",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00011",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00012",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00013",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00014",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00015",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00016",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00017",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00018",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00019",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00020",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00021",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00022",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00023",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00024",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00025",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00026",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00027",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00028",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00029",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00030",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00031",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00032",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00033",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00034",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00035",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00036",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00037",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00038",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00039",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ],
            [
                "id_hasil_perhitungan"=> "HP00040",
                "tanggal_hasil_perhitungan"=> "2023-02-09",
                "jumlah_dihitung"=> "3",
                "jumlah_diterima"=> "1"
            ]
            ];
        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                $id_hasil_perhitungan = $seed["id_hasil_perhitungan"];
                $hasil_perhitungan = new HasilPerhitungan;
                $hasil_perhitungan->id_hasil_perhitungan = $id_hasil_perhitungan;
                $hasil_perhitungan->tanggal_hasil_perhitungan = $seed["tanggal_hasil_perhitungan"];
                $hasil_perhitungan->jumlah_dihitung = $seed["jumlah_dihitung"];
                $hasil_perhitungan->jumlah_diterima = $seed["jumlah_diterima"];
                $hasil_perhitungan->save();
                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                echo $ex->getMessage();
            }
        }
    }
}
