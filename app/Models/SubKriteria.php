<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubKriteria extends Model
{
    use HasFactory;

    protected $table = 'sub_kriteria';
    protected $primaryKey = 'id_sub_kriteria';
    public $incrementing = false;


    protected $fillable = [
        'id_sub_kriteria', 'id_kriteria', 'nama_sub_kriteria', 'nilai', 'created_at', 'updated_at'
    ];

    public static function generateIdSubKriteria()
    {
        $kode = DB::table('sub_kriteria')->max('id_sub_kriteria');
        $addNol = '';
        $kode = str_replace("SC", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "0";
        }

        $kodeBaru = "SC" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
