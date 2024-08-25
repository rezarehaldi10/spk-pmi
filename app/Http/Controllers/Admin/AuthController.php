<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.auth.index');
    }

    public function validatorHelper($request)
    {
        $validator = Validator::make($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        return $validator;
    }

    public function validatorStoreHelper($request)
    {
        $validator = Validator::make($request, [
            'nama_petugas' => 'required',
            'username' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        return $validator;
    }

    public function login(Request $request)
    {
        $validator = $this->validatorHelper($request->all());
        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong";
            $response = "warning";
            return redirect(route('login'))->with($response, $message);
        }
        if (Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended('/');
        } else {
            $message = "Username atau Password Salah";
            $response = "warning";
            return redirect(route('login'))->with($response, $message);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function indexPetugas()
    {
        $petugas = DB::table('users')->get();

        return view('admin.pages.petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('admin.pages.petugas.create');
    }

    public function store(Request $request)
    {
        $validator = $this->validatorStoreHelper($request->all());
        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong atau username sudah ada";
            $response = "warning";
            return redirect(route('petugas.create'))->with($response, $message);
        }

        $user = new AuthUser;
        $id_user = AuthUser::generateUserId();
        $user->id_user = $id_user;
        $user->nama = $request->nama_petugas;
        $user->username = $request->username;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->save();

        $message = "Data petugas Berhasil ditambahkan";
        $response = "success";
        return redirect(route('petugas'))->with($response, $message);
    }

    public function edit($id)
    {
        $petugas = DB::table('users')
            ->where('id_user', $id)
            ->first();

        return view('admin.pages.petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->validatorStoreHelper($request->all());
        if ($validator->fails()) {
            $message = "Tidak boleh ada field yang kosong atau username sudah ada";
            $response = "warning";
            return redirect(route('petugas.edit', ['id' => $id]))->with($response, $message);
        }

        $user = AuthUser::where('id_user', $id)->first();
        $user->nama = $request->nama_petugas;
        $user->username = $request->username;
        $user->role = $request->role;;
        $user->password = bcrypt($request->password);
        $user->save();

        $message = "Data petugas Berhasil diubah";
        $response = "success";
        return redirect(route('petugas'))->with($response, $message);
    }

    public function destroy($id)
    {
        $user = AuthUser::where('id_user', $id)->first();
        $user->delete();
        $message = "Data petugas Berhasil dihapus";
        $response = "success";
        return redirect(route('petugas'))->with($response, $message);
    }
}
