<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\SubKriteria;

class SubkriteriaController extends Controller
{
    public function index()
    {
        $sub_kriteria = DB::table('sub_kriteria as sk')
            ->join('kriteria as k', 'sk.id_kriteria', '=', 'k.id_kriteria')
            ->get();

        return view('admin.pages.subkriteria.index', compact('sub_kriteria'));
    }

    public function validatorHelper($request)
    {
        $validator = Validator::make($request, [
            'id_kriteria' => 'required',
            'nama_subkriteria' => 'required',
            'nilai_subkriteria' => 'required|numeric',
        ]);

        return $validator;
    }

    public function create()
    {
        $kriterias = DB::table('kriteria')->get();

        return view('admin.pages.subkriteria.create', compact('kriterias'));
    }

    public function store(Request $request)
    {
        $validator = $this->validatorHelper($request->all());

        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong atau Nilai harus nomor !!.";
            $response = "warning";
            return redirect(route('subkriteria.create'))->with($response, $message);
        }

        $subkriteria = new SubKriteria;
        $id_sub_kriteria = SubKriteria::generateIdSubKriteria();
        $subkriteria->id_sub_kriteria = $id_sub_kriteria;
        $subkriteria->id_kriteria = $request->id_kriteria;
        $subkriteria->nama_sub_kriteria = $request->nama_subkriteria;
        $subkriteria->nilai = $request->nilai_subkriteria;
        $subkriteria->save();

        $message = "Data Sub Kriteria Berhasil ditambahkan.";
        $response = "success";
        return redirect(route('subkriteria'))->with($response, $message);
    }

    public function edit($id)
    {
        $subkriteria = DB::table('sub_kriteria')->where('id_sub_kriteria', $id)->first();
        $kriterias = DB::table('kriteria')->get();

        return view('admin.pages.subkriteria.edit', compact('subkriteria', 'kriterias'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->validatorHelper($request->all());

        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong atau Nilai harus nomor !!.";
            $response = "warning";
            return redirect(route('subkriteria.edit', ['id' => $id]))->with($response, $message);
        }

        $subkriteria = SubKriteria::where('id_sub_kriteria', $id)->first();
        $subkriteria->id_kriteria = $request->id_kriteria;
        $subkriteria->nama_sub_kriteria = $request->nama_subkriteria;
        $subkriteria->nilai = $request->nilai_subkriteria;
        $subkriteria->save();

        $message = "Data Sub Kriteria Berhasil diubah.";
        $response = "success";
        return redirect(route('subkriteria'))->with($response, $message);
    }

    public function destroy($id)
    {
        $subkriteria = SubKriteria::where('id_sub_kriteria', $id)->first();
        $subkriteria->delete();
        $message = "Data Sub Kriteria Berhasil dihapus.";
        $response = "success";
        return redirect(route('subkriteria'))->with($response, $message);
    }
}
