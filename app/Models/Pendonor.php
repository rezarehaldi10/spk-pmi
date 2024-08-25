<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pendonor extends Model
{
    use HasFactory;

    protected $table = 'pendonor';
    protected $primaryKey = 'id_pendonor';
    public $incrementing = false;

    protected $fillable = [
        'id_pendonor', 'nama_pendonor', 'kelamin', 'tanggal', 'golongan_darah', 'created_at', 'updated_at'
    ];

    public static function generateIdPendonor()
    {
        $kode = DB::table('pendonor')->max('id_pendonor');
        $addNol = '';
        $kode = str_replace("P", "", $kode);
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

        $kodeBaru = "P" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
