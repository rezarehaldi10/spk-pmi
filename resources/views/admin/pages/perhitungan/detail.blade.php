@extends('admin.layouts.app')

@section('title')
    Detail Perhitungan
@endsection

@push('after-style')
    <link href="{{ asset('SBadmin2/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
    <script src="{{ asset('SBadmin2/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('SBadmin2/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('#dataTable').DataTable({
            ordering: false,
        });
        $('#normalisasiTable').DataTable({
            ordering: false,
        });
        $('#optimasiTable').DataTable({
            ordering: false,
        });
        $('#lastTable').DataTable({
            ordering: false,
        });
    </script>
@endpush

@section('content')
    <div class="card shadow mb-12">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Konversi Nilai Pendonor </h6>
            <a href="{{ route('hasil') }}" class="btn btn-success">Keluar Detail</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Pendonor</th>
                            @if (!empty($kriterias))
                                @foreach ($kriterias as $kriteria)
                                    <th>{{ $kriteria->nama_kriteria }}</th>
                                @endforeach
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($detail_hasils))
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($detail_hasils as $detail_hasil)
                                @php
                                    $index++;
                                @endphp
                                <tr>
                                    <td>{{ $detail_hasil->kode_alternatif }}</td>
                                    <td>{{ $detail_hasil->nama_pendonor }}</td>
                                    @if (!empty($kriterias))
                                        @foreach ($kriterias as $kriteria)
                                            <th>
                                                {{ $nilai_kriterias[$kriteria->nama_kriteria][$index] }}
                                            </th>
                                        @endforeach
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-12 mt-2">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Normalisasi Pendonor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="normalisasiTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Pendonor</th>
                            @if (!empty($kriterias))
                                @php
                                    $index = 1;
                                @endphp
                                @foreach ($kriterias as $kriteria)
                                    <th>{{ 'C' . $index++ }}</th>
                                @endforeach
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($detail_hasils))
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($detail_hasils as $detail_hasil)
                                @php
                                    $index++;
                                @endphp
                                <tr>
                                    <td>{{ $detail_hasil->kode_alternatif }}</td>
                                    <td>{{ $detail_hasil->nama_pendonor }}</td>
                                    @if (!empty($kriterias))
                                        @foreach ($kriterias as $kriteria)
                                            <th>
                                                {{ round($normalisasi[$kriteria->nama_kriteria][$index], 3) }}
                                            </th>
                                        @endforeach
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-12 mt-2">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Optimasi Pendonor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="optimasiTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Pendonor</th>
                            @if (!empty($kriterias))
                                @php
                                    $index = 1;
                                @endphp
                                @foreach ($kriterias as $kriteria)
                                    <th>{{ 'C' . $index++ }}</th>
                                @endforeach
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($detail_hasils))
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($detail_hasils as $detail_hasil)
                                @php
                                    $index++;
                                @endphp
                                <tr>
                                    <td>{{ $detail_hasil->kode_alternatif }}</td>
                                    <td>{{ $detail_hasil->nama_pendonor }}</td>
                                    @if (!empty($kriterias))
                                        @foreach ($kriterias as $kriteria)
                                            <th>
                                                {{ round($optimasi[$kriteria->nama_kriteria][$index], 3) }}
                                            </th>
                                        @endforeach
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-12 mt-2">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data MIN, MAX, YI & Ranking Pendonor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="lastTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Pendonor</th>
                            <th>MAX</th>
                            <th>MIN</th>
                            <th>YI</th>
                            <th>Ranking</th>
                            <th>Status Seleksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($hasil_rankings))
                            @php
                                $index = 0;
                            @endphp
                            @foreach ($hasil_rankings as $hasil_ranking)
                                @php
                                    $index++;
                                @endphp
                                <tr>
                                    <td>{{ $hasil_ranking->kode_alternatif }}</td>
                                    <td>{{ $hasil_ranking->nama_pendonor }}</td>
                                    <th>
                                        {{ round($max[$index], 3) }}
                                    </th>
                                    <th>
                                        {{ round($min[$index], 3) }}
                                    </th>
                                    <th>
                                        {{ $hasil_ranking->yi }}
                                    </th>
                                    <th>
                                        {{ $hasil_ranking->ranking }}
                                    </th>
                                    <th>
                                        {{ $hasil_ranking->status }}
                                    </th>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
