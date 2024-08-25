<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\SubKriteria;

class SubKriteriaSeeder extends Seeder
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
                "id_kriteria"=> "C01",
                "nama_sub_kriteria"=> "17-25",
                "nilai"=> "5"
            ],
            [
                "id_kriteria"=> "C01",
                "nama_sub_kriteria"=> "26-35",
                "nilai"=> "4"
            ],
            [
                "id_kriteria"=> "C01",
                "nama_sub_kriteria"=> "36-45",
                "nilai"=> "3"
            ],
            [
                "id_kriteria"=> "C01",
                "nama_sub_kriteria"=> "46-55",
                "nilai"=> "2"
            ],
            [
                "id_kriteria"=> "C01",
                "nama_sub_kriteria"=> "56-70",
                "nilai"=> "1"
            ],
            [
                "id_kriteria"=> "C02",
                "nama_sub_kriteria"=> "45-70",
                "nilai"=> "5"
            ],
            [
                "id_kriteria"=> "C02",
                "nama_sub_kriteria"=> "71-80",
                "nilai"=> "4"
            ],
            [
                "id_kriteria"=> "C02",
                "nama_sub_kriteria"=> "81-90",
                "nilai"=> "3"
            ],
            [
                "id_kriteria"=> "C02",
                "nama_sub_kriteria"=> "91-100",
                "nilai"=> "2"
            ],
            [
                "id_kriteria"=> "C02",
                "nama_sub_kriteria"=> "101-120",
                "nilai"=> "1"
            ],
            [
                "id_kriteria"=> "C04",
                "nama_sub_kriteria"=> "36°C-36,2°C",
                "nilai"=> "5"
            ],
            [
                "id_kriteria"=> "C04",
                "nama_sub_kriteria"=> "36,3°C-36,5°C",
                "nilai"=> "4"
            ],
            [
                "id_kriteria"=> "C04",
                "nama_sub_kriteria"=> "36,6°C-36,8°C",
                "nilai"=> "3"
            ],
            [
                "id_kriteria"=> "C04",
                "nama_sub_kriteria"=> "36,9°C-37,1°C",
                "nilai"=> "2"
            ],
            [
                "id_kriteria"=> "C04",
                "nama_sub_kriteria"=> "37,2°C-37,4°C",
                "nilai"=> "1"
            ],
            [
                "id_kriteria"=> "C05",
                "nama_sub_kriteria"=> "17-17,9gr/dL",
                "nilai"=> "5"
            ],
            [
                "id_kriteria"=> "C05",
                "nama_sub_kriteria"=> "16-16,9gr/dL",
                "nilai"=> "4"
            ],
            [
                "id_kriteria"=> "C05",
                "nama_sub_kriteria"=> "15-15,9gr/dL",
                "nilai"=> "3"
            ],
            [
                "id_kriteria"=> "C05",
                "nama_sub_kriteria"=> "14-14,9gr/dL",
                "nilai"=> "2"
            ],
            [
                "id_kriteria"=> "C05",
                "nama_sub_kriteria"=> "12-13,9gr/dL",
                "nilai"=> "1"
            ],
            [
                "id_kriteria"=> "C03",
                "nama_sub_kriteria"=> "100/60 mmHg - 120/90 mmHg",
                "nilai"=> "4"
            ],
            [
                "id_kriteria"=> "C03",
                "nama_sub_kriteria"=> "130/60 mmHg - 130/90 mmHg",
                "nilai"=> "3"
            ],
            [
                "id_kriteria"=> "C03",
                "nama_sub_kriteria"=> "140/60 mmHg - 140/90 mmHg",
                "nilai"=> "2"
            ],
            [
                "id_kriteria"=> "C03",
                "nama_sub_kriteria"=> "150/60 mmHg – 150/90 mmHg",
                "nilai"=> "1"
            ]
        ];

        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                $id_sub_kriteria = SubKriteria::generateIdSubKriteria();
                $sub_kriteria = new SubKriteria;
                $sub_kriteria->id_sub_kriteria = $id_sub_kriteria;
                $sub_kriteria->id_kriteria = $seed["id_kriteria"];
                $sub_kriteria->nama_sub_kriteria = $seed["nama_sub_kriteria"];
                $sub_kriteria->nilai = $seed["nilai"];
                $sub_kriteria->save();
                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                echo $ex->getMessage();
            }
        }
    }
}
