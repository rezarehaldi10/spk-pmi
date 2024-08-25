<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HasilPerhitungan;
use App\Models\DetailHasilPerhitungan;
use Carbon\Carbon;

class PerhitunganController extends Controller
{
    public function index()
    {
        $nilai_kriterias = [];
        $pendonors = DB::table('pendonor')->get();
        $kriterias = DB::table('kriteria')->get();
        $golongan_darahs = DB::table('pendonor')->select('golongan_darah')->groupBy('golongan_darah')->get();
        foreach ($kriterias as $kriteria) {
            foreach ($pendonors as $pendonor) {
                $all_alternatif = DB::table('pendonor')
                    ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $pendonor->id_pendonor])
                    ->first();

                $nilai_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] = $all_alternatif?->nilai;
            }
        }
        return view('admin.pages.perhitungan.index', compact('nilai_kriterias', 'pendonors', 'kriterias', 'golongan_darahs'));
    }

    public function filter(Request $request)
    {
        $pendonors = "";
        $nilai_kriterias = [];

        if ($request->golongan_darah == '' && $request->tanggal == '') {
            return redirect(route('perhitungan'));
        } else if ($request->golongan_darah == '') {
            $pendonors = DB::table('pendonor')
                ->whereMonth('tanggal', substr($request->tanggal, 5))
                ->whereYear('tanggal', substr($request->tanggal, 0, 4))
                ->get();
            $golongan_darah_export = "null";
            $tanggal_export = $request->tanggal;
        } elseif ($request->tanggal == '') {
            $pendonors = DB::table('pendonor')->where('golongan_darah', $request->golongan_darah)->get();
            $tanggal_export = "null";
            $golongan_darah_export = $request->golongan_darah;
        } else {
            $pendonors = DB::table('pendonor')
                ->where('golongan_darah', $request->golongan_darah)
                ->whereMonth('tanggal', substr($request->tanggal, 5))
                ->whereYear('tanggal', substr($request->tanggal, 0, 4))
                ->get();
            $golongan_darah_export = $request->golongan_darah;
            $tanggal_export = $request->tanggal;
        }

        $kriterias = DB::table('kriteria')->get();
        $golongan_darahs = DB::table('pendonor')->select('golongan_darah')->groupBy('golongan_darah')->get();
        foreach ($kriterias as $kriteria) {
            foreach ($pendonors as $pendonor) {
                $all_alternatif = DB::table('pendonor')
                    ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $pendonor->id_pendonor])
                    ->first();

                $nilai_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] = $all_alternatif?->nilai;
            }
        }
        return view('admin.pages.perhitungan.index', compact('nilai_kriterias', 'pendonors', 'kriterias', 'golongan_darahs'));
    }

    public function store(Request $request)
    {
        $nilai_kriterias = array();
        $pembagi = array();
        $bobot = array();
        $normalisasi = array();
        $optimasi = array();
        $min = array();
        $max = array();
        $yi = array();
        $sort = array();
        $rank = array();
        $status = array();
        $number = 0;
        $kriterias = DB::table('kriteria')->get();
        $jumlah_diterima = $request->jumlah;
        $data_pendonors = json_decode($request->data_pendonor);
        $id_hasil_perhitungan = HasilPerhitungan::generateIdHasilPerhitungan();
        $jumlah_dihitung = count($data_pendonors);
        $index_alternatif = 0;
        $addNol = "";

        $hasil_perhitungan = new HasilPerhitungan;
        $hasil_perhitungan->id_hasil_perhitungan = $id_hasil_perhitungan;
        $hasil_perhitungan->tanggal_hasil_perhitungan = Carbon::now();
        $hasil_perhitungan->jumlah_dihitung = $jumlah_dihitung;
        $hasil_perhitungan->jumlah_diterima = $jumlah_diterima;
        $hasil_perhitungan->save();

        foreach ($kriterias as $kriteria) {
            $pembagi[$kriteria->nama_kriteria] = 0;
            foreach ($data_pendonors as $pendonor) {
                $all_alternatif = DB::table('pendonor')
                    ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $pendonor->id_pendonor])
                    ->first();

                $nilai_kriterias[$kriteria->nama_kriteria][$pendonor->no] = $all_alternatif?->nilai;
                $pembagi[$kriteria->nama_kriteria] = $pembagi[$kriteria->nama_kriteria] + pow(!empty($all_alternatif->nilai) ? $all_alternatif->nilai : 0, 2);
            }
            $pembagi[$kriteria->nama_kriteria] = sqrt($pembagi[$kriteria->nama_kriteria]);
            $bobot[$kriteria->nama_kriteria] = $kriteria->bobot;
        }

        foreach ($kriterias as $kriteria) {
            foreach ($data_pendonors as $pendonor) {
                $normalisasi[$kriteria->nama_kriteria][$pendonor->no] = $nilai_kriterias[$kriteria->nama_kriteria][$pendonor->no] / $pembagi[$kriteria->nama_kriteria];
                $optimasi[$kriteria->nama_kriteria][$pendonor->no] = $normalisasi[$kriteria->nama_kriteria][$pendonor->no] * $bobot[$kriteria->nama_kriteria];
            }
        }

        foreach ($data_pendonors as $pendonor) {
            $maximal = 0;
            $minimal = 0;
            foreach ($kriterias as $kriteria) {
                if ($kriteria->jenis == 'Benefit') {
                    $maximal += $optimasi[$kriteria->nama_kriteria][$pendonor->no];
                    $max[$pendonor->no] = $maximal;
                } elseif ($kriteria->jenis == 'Cost') {
                    $minimal += $optimasi[$kriteria->nama_kriteria][$pendonor->no];
                    $min[$pendonor->no] = $minimal;
                }
            }
        }

        foreach ($data_pendonors as $pendonor) {
            $yi[$pendonor->no] = $max[$pendonor->no] - $min[$pendonor->no];
            $sort[$pendonor->no] = $max[$pendonor->no] - $min[$pendonor->no];
        }

        arsort($sort);

        foreach ($sort as $key => $value) {
            $number++;
            $rank[$key] = $number;
            if ($number > $jumlah_diterima) {
                $status[$key] = 'Tidak Lolos';
            } else {
                $status[$key] = 'Lolos';
            }
        }


        foreach ($data_pendonors as $key => $pendonor) {
            $index_alternatif++;
            $kode_alternatif = "A" . $index_alternatif;

            DB::beginTransaction();
            try {
                $detail_hasil = new DetailHasilPerhitungan;
                $detail_hasil->kode_alternatif = $kode_alternatif;
                $detail_hasil->id_hasil_perhitungan = $id_hasil_perhitungan;
                $detail_hasil->id_pendonor = $pendonor->id_pendonor;
                $detail_hasil->yi = round($yi[$pendonor->no], 3);
                $detail_hasil->ranking = $rank[$pendonor->no];
                $detail_hasil->status = $status[$pendonor->no];
                $detail_hasil->save();
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json($e->getMessage(), 500);
            }
        }

        return response()->json(array(
            'id_hasil_perhitungan' => $id_hasil_perhitungan
        ), 200);
    }

    public function show($id)
    {
        $pembagi = array();
        $bobot = array();
        $normalisasi = array();
        $optimasi = array();
        $min = array();
        $max = array();
        $yi = array();
        $sort = array();
        $rank = array();
        $status = array();
        $number = 0;
        $nilai_kriterias = array();
        $kriterias = DB::table('kriteria')->get();
        $nilai_kriteria_ranking = array();
        $pembagi_ranking = array();
        $bobot_ranking = array();
        $normalisasi_ranking = array();
        $optimasi_ranking = array();

        $detail_hasils = DB::table('detail_hasil_perhitungan as dhp')
            ->join('pendonor as t', 'dhp.id_pendonor', '=', 't.id_pendonor')
            ->where('dhp.id_hasil_perhitungan', $id)
            ->get();

        $hasil_rankings = DB::table('detail_hasil_perhitungan as dhp')
            ->join('pendonor as t', 'dhp.id_pendonor', '=', 't.id_pendonor')
            ->where('dhp.id_hasil_perhitungan', $id)
            ->orderBy('dhp.ranking', 'ASC')
            ->get();

        foreach ($kriterias as $kriteria) {
            $index = 1;
            $pembagi[$kriteria->nama_kriteria] = 0;
            foreach ($detail_hasils as $detail_hasil) {
                $all_alternatif = DB::table('pendonor')
                    ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $detail_hasil->id_pendonor])
                    ->first();

                $nilai_kriterias[$kriteria->nama_kriteria][$index++] = !empty($all_alternatif->nilai) ? $all_alternatif->nilai : 0;
                $pembagi[$kriteria->nama_kriteria] = $pembagi[$kriteria->nama_kriteria] + pow(!empty($all_alternatif->nilai) ? $all_alternatif->nilai : 0, 2);
            }
            $pembagi[$kriteria->nama_kriteria] = sqrt($pembagi[$kriteria->nama_kriteria]);
            $bobot[$kriteria->nama_kriteria] = $kriteria->bobot;
        }

        foreach ($kriterias as $kriteria) {
            $index = 0;
            foreach ($detail_hasils as $detail_hasil) {
                $index++;
                $normalisasi[$kriteria->nama_kriteria][$index] = $nilai_kriterias[$kriteria->nama_kriteria][$index] == 0 && $pembagi[$kriteria->nama_kriteria] == 0 ? 0 : $nilai_kriterias[$kriteria->nama_kriteria][$index] / $pembagi[$kriteria->nama_kriteria];
                $optimasi[$kriteria->nama_kriteria][$index] = $normalisasi[$kriteria->nama_kriteria][$index] * $bobot[$kriteria->nama_kriteria];
            }
        }
        foreach ($kriterias as $kriteria) {
            $index = 1;
            $pembagi_ranking[$kriteria->nama_kriteria] = 0;
            foreach ($hasil_rankings as $hasil_ranking) {
                $all_alternatif_ranking = DB::table('pendonor')
                    ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $hasil_ranking->id_pendonor])
                    ->first();

                $nilai_kriteria_ranking[$kriteria->nama_kriteria][$index++] = !empty($all_alternatif_ranking->nilai) ? $all_alternatif_ranking->nilai : 0;
                $pembagi_ranking[$kriteria->nama_kriteria] = $pembagi_ranking[$kriteria->nama_kriteria] + pow(!empty($all_alternatif_ranking->nilai) ? $all_alternatif_ranking->nilai : 0, 2);
            }
            $pembagi_ranking[$kriteria->nama_kriteria] = sqrt($pembagi_ranking[$kriteria->nama_kriteria]);
            $bobot_ranking[$kriteria->nama_kriteria] = $kriteria->bobot;
        }

        foreach ($kriterias as $kriteria) {
            $index = 0;
            foreach ($hasil_rankings as $hasil_ranking) {
                $index++;
                $normalisasi_ranking[$kriteria->nama_kriteria][$index] = $nilai_kriteria_ranking[$kriteria->nama_kriteria][$index] == 0 && $pembagi_ranking[$kriteria->nama_kriteria] == 0 ? 0 : $nilai_kriteria_ranking[$kriteria->nama_kriteria][$index] / $pembagi_ranking[$kriteria->nama_kriteria];
                $optimasi_ranking[$kriteria->nama_kriteria][$index] = $normalisasi_ranking[$kriteria->nama_kriteria][$index] * $bobot_ranking[$kriteria->nama_kriteria];
            }
        }

        $index = 0;
        foreach ($detail_hasils as $detail_hasil) {
            $maximal = 0;
            $minimal = 0;
            $index++;
            foreach ($kriterias as $kriteria) {
                if ($kriteria->jenis == 'Benefit') {
                    $maximal += $optimasi_ranking[$kriteria->nama_kriteria][$index];
                    $max[$index] = $maximal;
                } elseif ($kriteria->jenis == 'Cost') {
                    $minimal += $optimasi_ranking[$kriteria->nama_kriteria][$index];
                    $min[$index] = $minimal;
                }
            }
        }

        return view('admin.pages.perhitungan.detail', compact('kriterias', 'detail_hasils', 'nilai_kriterias', 'normalisasi', 'optimasi', 'min', 'max', 'hasil_rankings'));
    }

    public function destroy($id)
    {
        $hasil_perhitungan = HasilPerhitungan::where('id_hasil_perhitungan', $id)->first();
        $hasil_perhitungan->delete();

        $message = "Data Hasil Perhitungan Berhasil dihapus";
        $response = "success";
        return redirect(route('hasil'))->with($response, $message);
    }
}
