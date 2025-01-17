<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SubKriteria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            KriteriaSeeder::class,
            SubKriteriaSeeder::class,
            PendonorSeeder::class,
            DetailPendonorSeeder::class,
            HasilPerhitunganSeeder::class,
            DetailHasilPerhitunganSeeder::class,
            AuthUserSeeder::class
        ]);
    }
}
