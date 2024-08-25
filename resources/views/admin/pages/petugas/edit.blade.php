@extends('admin.layouts.app')

@section('title')
    Edit Petugas
@endsection

@section('content')
    <div class="card shadow mb-12 col-md-8 p-0">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Petugas</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('petugas.update', ['id' => $petugas->id_user]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_petugas">Nama petugas</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control"
                        value="{{ $petugas->nama }}">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control"
                        value="{{ $petugas->username }}">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">-- Pilih Role --</option>
                        <option value="petugas" {{ $petugas->role == 'petugas' ? ' selected ' : '' }}>Petugas</option>
                        <option value="admin" {{ $petugas->role == 'admin' ? ' selected ' : '' }}>Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control"
                        value="{{ $petugas->password }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('petugas') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
