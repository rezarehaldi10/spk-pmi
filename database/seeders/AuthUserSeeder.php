<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuthUser;
use Illuminate\Support\Facades\DB;

class AuthUserSeeder extends Seeder
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
                "nama" => "Admin",
                "username" => "admin",
                "password" => "admin",
                "role" => "admin"
            ],
            [
                "nama" => "Petugas",
                "username" => "petugas",
                "password" => "petugas",
                "role" => "petugas"
            ]
        ];

        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                $id_user = AuthUser::generateUserId();
                $user = new AuthUser;
                $user->id_user = $id_user;
                $user->nama = $seed["nama"];
                $user->username = $seed["username"];
                $user->password = bcrypt($seed["password"]);
                $user->role = $seed["role"];
                $user->save();
                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                $ex->getMessage();
            }
        }
    }
}
