<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HasilPerhitungan extends Model
{
    use HasFactory;
    protected $table = 'hasil_perhitungan';
    protected $primaryKey = 'id_hasil_perhitungan';
    public $incrementing = false;


    protected $fillable = [
        'id_hasil_perhitungan', 'tanggal_hasil_perhitungan', 'jumlah_dihitung', 'jumlah_diterima', 'created_at', 'updated_at'
    ];

    public static function generateIdHasilPerhitungan()
    {
        $kode = DB::table('hasil_perhitungan')->max('id_hasil_perhitungan');
        $addNol = '';
        $kode = str_replace("HP", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "0000";
        } elseif (strlen($kode) == 2) {
            $addNol = "000";
        } elseif (strlen($kode) == 3) {
            $addNol = "00";
        } elseif (strlen($kode) == 4) {
            $addNol = "0";
        }

        $kodeBaru = "HP" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
