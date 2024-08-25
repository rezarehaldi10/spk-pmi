@extends('admin.layouts.app')

@section('title')
    Edit Sub Kriteria
@endsection

@section('content')
    <div class="card shadow mb-12 col-md-8 p-0">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Sub Kriteria</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('subkriteria.update', ['id' => $subkriteria->id_sub_kriteria]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <select name="id_kriteria" id="id_kriteria" class="form-control">
                        <option value="">-- Pilih Kriteria --</option>
                        @foreach ($kriterias as $kriteria)
                            <option value="{{ $kriteria->id_kriteria }}"
                                {{ $subkriteria->id_kriteria == $kriteria->id_kriteria ? ' selected ' : '' }}>
                                {{ $kriteria->nama_kriteria }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_subkriteria">Sub Kriteria</label>
                    <input type="text" name="nama_subkriteria" id="nama_subkriteria" class="form-control"
                        value="{{ $subkriteria->nama_sub_kriteria }}">
                </div>
                <div class="form-group">
                    <label for="nilai_subkriteria">Nilai Sub Kriteria</label>
                    <input type="text" name="nilai_subkriteria" id="nilai_subkriteria" class="form-control"
                        value="{{ $subkriteria->nilai }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('subkriteria') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
