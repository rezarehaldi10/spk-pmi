<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = DB::table('kriteria')->get();

        return view('admin.pages.kriteria.index', compact('kriteria'));
    }

    public function validatorHelper($request)
    {
        $validator = Validator::make($request, [
            'nama_kriteria' => 'required',
            'bobot_kriteria' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'jenis_kriteria' => 'required',
        ]);

        return $validator;
    }

    public function create()
    {
        return view('admin.pages.kriteria.create');
    }

    public function store(Request $request)
    {
        $validator = $this->validatorHelper($request->all());
        if ($validator->fails() || $request->bobot_kriteria == 0) {
            $message = "Tidak boleh ada field yang kosong atau Bobot harus desimal !!.";
            $response = "warning";
            return redirect(route('kriteria.create'))->with($response, $message);
        }

        $jumlah_kriteria = DB::table('kriteria')->sum('bobot');
        $total_kriteria = $jumlah_kriteria + $request->bobot_kriteria;

        if ($total_kriteria > 1.00) {
            $message = "Total Bobot Kriteria tidak boleh melebihi 100%";
            $response = "warning";
            return redirect(route('kriteria.create'))->with($response, $message);
        }

        $kriteria = new Kriteria;
        $id_kriteria = Kriteria::generateIdKriteria();
        $kriteria->id_kriteria = $id_kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->bobot = $request->bobot_kriteria;
        $kriteria->jenis = $request->jenis_kriteria;
        $kriteria->save();
        $message = "Data Kriteria Berhasil ditambahkan";
        $response = "success";
        return redirect(route('kriteria'))->with($response, $message);
    }

    public function edit($id)
    {
        $kriteria = DB::table('kriteria')->where('id_kriteria', $id)->first();

        return view('admin.pages.kriteria.edit', compact('kriteria'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->validatorHelper($request->all());

        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong atau Bobot harus desimal !!.";
            $response = "warning";
            return redirect(route('kriteria.edit', ['id' => $id]))->with($response, $message);
        }

        $kriteria = Kriteria::where('id_kriteria', $id)->first();

        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->bobot = $request->bobot_kriteria;
        $kriteria->jenis = $request->jenis_kriteria;
        $kriteria->save();

        $message = "Data Kriteria Berhasil diubah";
        $response = "success";
        return redirect(route('kriteria'))->with($response, $message);
    }

    public function destroy($id)
    {
        $kriteria = Kriteria::where('id_kriteria', $id)->first();
        $kriteria->delete();

        $message = "Data Kriteria Berhasil dihapus";
        $response = "success";
        return redirect(route('kriteria'))->with($response, $message);
    }
}
