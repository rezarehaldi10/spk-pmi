@extends('admin.layouts.app')

@section('title')
    Tambah Pendonor
@endsection

@section('content')
    <div class="card shadow mb-12 col-md-8 p-0">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pendonor</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pendonor.post') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_pendonor">Nama Pendonor</label>
                    <input type="text" name="nama_pendonor" id="nama_pendonor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gender">Kelamin</label>
                    <select name="kelamin" id="kelamin" class="form-control">
                        <option value="">-- Pilih Kelamin --</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bidang">Golongan Darah</label>
                    <input type="text" name="golongan_darah" id="golongan_darah" class="form-control">
                </div>
                @foreach ($kriterias as $data)
                    <div class="form-group">
                        <label
                            for="{{ strtolower(str_replace(' ', '_', $data->nama_kriteria)) }}">{{ $data->nama_kriteria }}</label>
                        <select name="{{ strtolower(str_replace(' ', '_', $data->nama_kriteria)) }}"
                            id="{{ strtolower(str_replace(' ', '_', $data->nama_kriteria)) }}" class="form-control">
                            <option value="">-- Pilih {{ $data->nama_kriteria }} --</option>
                            @foreach ($sub_kriterias[$data->nama_kriteria] as $sub_kriteria)
                                <option value="{{ $sub_kriteria['id_sub_kriteria'] }}">{{ $sub_kriteria['nama_sub'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('pendonor') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
