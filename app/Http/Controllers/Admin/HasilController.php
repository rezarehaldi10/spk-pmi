<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    public function index()
    {
        $hasil_perhitungan = DB::table('hasil_perhitungan')->orderBy('id_hasil_perhitungan', 'desc')->get();
        return view('admin.pages.hasil.index', compact('hasil_perhitungan'));
    }
}
