@extends('admin.layouts.app')

@section('title')
    Edit Pendonor
@endsection

@section('content')
    <div class="card shadow mb-12 col-md-8 p-0">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Pendonor</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pendonor.update', ['id' => $pendonor->id_pendonor]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_pendonor">Nama Pendonor</label>
                    <input type="text" name="nama_pendonor" id="nama_pendonor" class="form-control"
                        value="{{ $pendonor->nama_pendonor }}">
                </div>
                <div class="form-group">
                    <label for="kelamin">Kelamin</label>
                    <select name="kelamin" id="kelamin" class="form-control">
                        <option value="">-- Pilih Kriteria --</option>
                        <option value="L" {{ $pendonor->kelamin == 'L' ? ' selected ' : '' }}>Laki - Laki</option>
                        <option value="P" {{ $pendonor->kelamin == 'P' ? ' selected ' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="golongan_darah">Golongan Darah</label>
                    <input type="text" name="golongan_darah" id="golongan_darah" class="form-control"
                        value="{{ $pendonor->golongan_darah }}">
                </div>
                @foreach ($kriterias as $data)
                    <div class="form-group">
                        <label
                            for="{{ strtolower(str_replace(' ', '_', $data->nama_kriteria)) }}">{{ $data->nama_kriteria }}</label>
                        <select name="{{ strtolower(str_replace(' ', '_', $data->nama_kriteria)) }}"
                            id="{{ strtolower(str_replace(' ', '_', $data->nama_kriteria)) }}" class="form-control">
                            <option value="">-- Pilih {{ $data->nama_kriteria }} --</option>
                            @foreach ($sub_kriterias[$data->nama_kriteria] as $sub_kriteria)
                                <option value="{{ $sub_kriteria['id_sub_kriteria'] }}"
                                    {{ $sub_kriteria['nama_sub'] == $pendonor_kriterias[$data->nama_kriteria][$pendonor->id_pendonor] ? ' selected ' : '' }}>
                                    {{ $sub_kriteria['nama_sub'] }}
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
