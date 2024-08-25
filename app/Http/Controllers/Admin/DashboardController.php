<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pendonor = DB::table('pendonor')->count();
        $jumlah_kriteria = DB::table('kriteria')->count();
        $jumlah_sub_kriteria = DB::table('sub_kriteria')->count();
        $jumlah_hasil_perhitungan = DB::table('hasil_perhitungan')->count();
        // dd($jumlah_hasil_perhitungan);
        return view('admin.pages.dashboard.index', compact('jumlah_pendonor', 'jumlah_kriteria', 'jumlah_sub_kriteria', 'jumlah_hasil_perhitungan'));
    }
}
