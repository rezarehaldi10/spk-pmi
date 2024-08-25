<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function exportPendonor($golongan_darah, $bulan_tahun)
    {
        $pendonors = "";
        $pendonor_kriterias = [];

        $bulan = [
            "January" => 'Januari',
            "February" => 'Februari',
            "March" => "Maret",
            "April" => "April",
            "May" => "Mei",
            "June" => "Juni",
            "July" => "Juli",
            "August" => "Agustus",
            "September" => "September",
            "October" => "Oktober",
            "November" => "November",
            "December" => "Desember"
        ];

        $tanggal = Carbon::now()->format('d F Y');
        $month = Carbon::now()->format('F');
        $tanggal = str_replace($month, $bulan[$month], $tanggal);
        // dd($tanggal);

        if ($golongan_darah == 'null' && $bulan_tahun == 'null') {
            $pendonors = DB::table('pendonor')->get();
        } else if ($golongan_darah == 'null') {
            $pendonors = DB::table('pendonor')
                ->whereMonth('tanggal', substr($bulan_tahun, 5))
                ->whereYear('tanggal', substr($bulan_tahun, 0, 4))
                ->get();
        } elseif ($bulan_tahun == 'null') {
            $pendonors = DB::table('pendonor')->where('golongan_darah', $golongan_darah)->get();
        } else {
            $pendonors = DB::table('pendonor')
                ->where('golongan_darah', $golongan_darah)
                ->whereMonth('tanggal', substr($bulan_tahun, 5))
                ->whereYear('tanggal', substr($bulan_tahun, 0, 4))
                ->get();
        }

        $kriterias = DB::table('kriteria')->get();
        // $golongan_darahs = DB::table('pendonor')->select('bidang')->groupBy('bidang')->get();
        foreach ($kriterias as $kriteria) {
            foreach ($pendonors as $pendonor) {
                $all_alternatif = DB::table('pendonor')
                    ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $pendonor->id_pendonor])
                    ->first();

                $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] = $all_alternatif?->nama_sub_kriteria;
            }
        }
        if ($bulan_tahun != 'null') {
            $bulan_tahun = $bulan[Carbon::parse($bulan_tahun)->format('F')] . ' ' . Carbon::parse($bulan_tahun)->format('Y');
            // dd($bulan_tahun);
        }

        $title = "Laporan Pendonor" . ($golongan_darah == "null" ? " Semua Golongan Darah" : " Golongan Darah " . $golongan_darah) . " & " . ($bulan_tahun == "null" ? "Semua Bulan Tahun " : "Bulan Tahun " . $bulan_tahun);
        $pdf = PDF::loadView('admin.pages.report.export-pendonor', compact('pendonors', 'kriterias', 'pendonor_kriterias', 'golongan_darah', 'bulan_tahun', 'tanggal', 'title'));
        return $pdf->download($title . '.pdf');
    }

    public function exportHasil($id)
    {
        $bulan = [
            "January" => 'Januari',
            "February" => 'Februari',
            "March" => "Maret",
            "April" => "April",
            "May" => "Mei",
            "June" => "Juni",
            "July" => "Juli",
            "August" => "Agustus",
            "September" => "September",
            "October" => "Oktober",
            "November" => "November",
            "December" => "Desember"
        ];

        $tanggal = Carbon::now()->format('d F Y');
        $month = Carbon::now()->format('F');
        $tanggal = str_replace($month, $bulan[$month], $tanggal);

        $detail_hasils = DB::table('detail_hasil_perhitungan as dhp')
            ->join('pendonor as p', 'dhp.id_pendonor', '=', 'p.id_pendonor')
            ->where('dhp.id_hasil_perhitungan', $id)
            ->orderBy('dhp.ranking', 'ASC')
            ->get();

        $title = "Laporan Hasil Perhitungan " . $id;
        $pdf = PDF::loadView('admin.pages.report.export-hasil', compact('detail_hasils', 'title', 'tanggal'));
        return $pdf->download($title . '.pdf');
    }
}
