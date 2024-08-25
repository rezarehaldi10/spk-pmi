@extends('admin.layouts.app')

@section('title')
    Tambah Kriteria
@endsection

@section('content')
    <div class="card shadow mb-12 col-md-8 p-0">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('kriteria.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bobot_kriteria">Bobot Kriteria</label>
                    <input type="text" name="bobot_kriteria" id="bobot_kriteria" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis_kriteria">Jenis Kriteria</label>
                    <select name="jenis_kriteria" id="jenis_kriteria" class="form-control">
                        <option value="">-- Pilih Jenis Kriteria --</option>
                        <option value="Cost">Cost</option>
                        <option value="Benefit">Benefit</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('kriteria') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
