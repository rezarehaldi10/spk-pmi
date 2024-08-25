<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Pendonor;
use App\Models\DetailPendonor;
use Illuminate\Support\Carbon;

class PendonorController extends Controller
{

    public function validatorHelper($request)
    {
        $kriterias = DB::table('kriteria')->get();
        $req = [
            'nama_pendonor' => 'required',
            'kelamin' => 'required',
            'golongan_darah' => 'required',
        ];

        foreach ($kriterias as $kriteria) {
            $req[strtolower(str_replace(" ", "_", $kriteria->nama_kriteria))] = 'required';
        }
        $validator = Validator::make($request, $req);

        return $validator;
    }

    public function index()
    {
        $pendonor_kriterias = [];
        $pendonors = DB::table('pendonor')->get();
        $kriterias = DB::table('kriteria')->get();
        $golongan_darahs = DB::table('pendonor')->select('golongan_darah')->groupBy('golongan_darah')->get();
        $golongan_darah_export = "null";
        $tanggal_export = "null";
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

        return view('admin.pages.pendonor.index', compact('kriterias', 'pendonors', 'pendonor_kriterias', 'golongan_darahs', 'golongan_darah_export', 'tanggal_export'));
    }

    public function filter(Request $request)
    {
        $pendonors = "";
        $pendonor_kriterias = [];
        $golongan_darah_export = "null";
        $tanggal_export = "null";

        if ($request->golongan_darah == '' && $request->tanggal == '') {
            return redirect(route('pendonor'));
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

                $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] = $all_alternatif?->nama_sub_kriteria;
            }
        }

        return view('admin.pages.pendonor.index', compact('kriterias', 'pendonors', 'pendonor_kriterias', 'golongan_darahs', 'golongan_darah_export', 'tanggal_export'));
    }

    public function create()
    {
        $sub_kriterias = [];
        $kriterias = DB::table('kriteria')->get();

        foreach ($kriterias as $kriteria) {
            $child_sub_kriterias = DB::table('sub_kriteria')->where('id_kriteria', $kriteria->id_kriteria)->get();
            foreach ($child_sub_kriterias as $key => $sub_kriteria) {
                $sub_kriterias[$kriteria->nama_kriteria][$key] = [
                    'id_sub_kriteria' => $sub_kriteria->id_sub_kriteria,
                    'nama_sub' => $sub_kriteria->nama_sub_kriteria
                ];
            }
        }

        return view('admin.pages.pendonor.create', compact('kriterias', 'sub_kriterias'));
    }

    public function store(Request $request)
    {
        $validator = $this->validatorHelper($request->all());
        $kriterias = DB::table('kriteria')->get();
        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong atau ID Pendonor harus angka!!.";
            $response = "warning";
            return redirect(route('pendonor.create'))->with($response, $message);
        }
        $id_pendonor = Pendonor::generateIdPendonor();
        $pendonor = new Pendonor;
        $pendonor->id_pendonor = $id_pendonor;
        $pendonor->nama_pendonor = $request->nama_pendonor;
        $pendonor->kelamin = $request->kelamin;
        $pendonor->tanggal = Carbon::now();
        $pendonor->golongan_darah = $request->golongan_darah;
        $pendonor->save();
        foreach ($kriterias as $key => $kriteria) {
            $detail_pendonor = new DetailPendonor;
            $detail_pendonor->id_pendonor = $id_pendonor;
            $detail_pendonor->id_sub_kriteria = $request[strtolower(str_replace(" ", "_", $kriteria->nama_kriteria))];
            $detail_pendonor->save();
        }

        $message = "Data Pendonor Berhasil ditambahkan.";
        $response = "success";
        return redirect(route('pendonor'))->with($response, $message);
    }

    public function edit($id)
    {
        $sub_kriterias = [];
        $pendonor_kriterias = [];
        $pendonor = DB::table('pendonor')->where('id_pendonor', $id)->first();
        $kriterias = DB::table('kriteria')->get();

        foreach ($kriterias as $kriteria) {
            $all_alternatif = DB::table('pendonor')
                ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $pendonor->id_pendonor])
                ->first();

            $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] = $all_alternatif?->nama_sub_kriteria;
        }

        foreach ($kriterias as $kriteria) {
            $child_sub_kriterias = DB::table('sub_kriteria')->where('id_kriteria', $kriteria->id_kriteria)->get();
            foreach ($child_sub_kriterias as $key => $sub_kriteria) {
                $sub_kriterias[$kriteria->nama_kriteria][$key] = [
                    'id_sub_kriteria' => $sub_kriteria->id_sub_kriteria,
                    'nama_sub' => $sub_kriteria->nama_sub_kriteria
                ];
            }
        }

        return view('admin.pages.pendonor.edit', compact('pendonor', 'pendonor_kriterias', 'kriterias', 'sub_kriterias'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->validatorHelper($request->all());
        $kriterias = DB::table('kriteria')->get();
        $pendonor = DB::table('pendonor')->where('id_pendonor', $id)->first();
        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong atau ID Pendonor harus angka!!.";
            $response = "warning";
            return redirect(route('pendonor.edit', ['id' => $id]))->with($response, $message);
        }
        foreach ($kriterias as $kriteria) {
            $all_alternatif = DB::table('pendonor')
                ->leftjoin('detail_pendonor as b', 'pendonor.id_pendonor', '=', 'b.id_pendonor')
                ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'pendonor.id_pendonor' => $pendonor->id_pendonor])
                ->first();

            $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] = $all_alternatif?->id_sub_kriteria;
        }
        $pendonor = Pendonor::where('id_pendonor', $id)->first();
        $pendonor->nama_pendonor = $request->nama_pendonor;
        $pendonor->kelamin = $request->kelamin;
        $pendonor->golongan_darah = $request->golongan_darah;
        $pendonor->save();
        foreach ($kriterias as $key => $kriteria) {
            $detail_pendonor = DetailPendonor::where(['id_pendonor' => $id, 'id_sub_kriteria' => $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor]])->first();
            // $detail_pendonor = DetailPendonor::where(['id_pendonor' => $id, 'id_sub_kriteria' => $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor]])->first();
            // $detail_pendonor->id_pendonor = $pendonor->id_pendonor;
            // $detail_pendonor->id_sub_kriteria = $request[strtolower(str_replace(" ", "_", $kriteria->nama_kriteria))];
            // $detail_pendonor->save();
            if (empty($detail_pendonor)) {
                $new_detail_pendonor = new DetailPendonor;
                $new_detail_pendonor->id_pendonor = $id;
                $new_detail_pendonor->id_sub_kriteria = $request[strtolower(str_replace(" ", "_", $kriteria->nama_kriteria))];
                $new_detail_pendonor->save();
            } else {
                $detail_pendonor->id_pendonor = $id;
                $detail_pendonor->id_sub_kriteria = $request[strtolower(str_replace(" ", "_", $kriteria->nama_kriteria))];
                $detail_pendonor->save();
            }
        }

        $message = "Data Pendonor Berhasil diubah.";
        $response = "success";
        return redirect(route('pendonor'))->with($response, $message);
    }

    public function destroy($id)
    {
        $pendonor = Pendonor::where('id_pendonor', $id)->first();
        $pendonor->delete();

        $message = "Data Pendonor Berhasil dihapus.";
        $response = "success";
        return redirect(route('pendonor'))->with($response, $message);
    }
}
