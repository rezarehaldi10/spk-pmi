<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Kriteria;

class KriteriaSeeder extends Seeder
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
                "nama_kriteria" => "Usia",
                "bobot" => 0.15,
                "jenis" => "Cost"
            ],
            [
                "nama_kriteria" => "Berat Badan",
                "bobot" => 0.15,
                "jenis" => "Cost"
            ],
            [
                "nama_kriteria" => "Tekanan Darah",
                "bobot" => 0.25,
                "jenis" => "Cost"
            ],
            [
                "nama_kriteria" => "Suhu Tubuh",
                "bobot" => 0.2,
                "jenis" => "Cost"
            ],
            [
                "nama_kriteria" => "Hemoglobin Darah",
                "bobot" => 0.25,
                "jenis" => "Benefit"
            ]
        ];

        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                $id_kriteria = Kriteria::generateIdKriteria();
                $kriteria = new Kriteria;
                $kriteria->id_kriteria = $id_kriteria;
                $kriteria->nama_kriteria = $seed["nama_kriteria"];
                $kriteria->bobot = $seed["bobot"];
                $kriteria->jenis = $seed["jenis"];
                $kriteria->save();
                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                echo $ex->getMessage();
            }
        }
    }
}
