<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    public $incrementing = false;


    protected $fillable = [
        'id_kriteria', 'nama_kriteria', 'bobot', 'jenis', 'created_at', 'updated_at'
    ];

    public static function generateIdKriteria()
    {
        $kode = DB::table('kriteria')->max('id_kriteria');
        $addNol = '';
        $kode = str_replace("C", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "0";
        }

        $kodeBaru = "C" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
