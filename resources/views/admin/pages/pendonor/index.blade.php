@extends('admin.layouts.app')

@section('title')
    Pendonor
@endsection

@push('after-style')
    <link href="{{ asset('SBadmin2/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
        rel="stylesheet" />
@endpush

@push('after-script')
    <script src="{{ asset('SBadmin2/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('SBadmin2/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script>
        $('#dataTable').DataTable({
            paging: false,
        });
        // $('#datepicker').datepicker({
        //     format: "yyyy", // Notice the Extra space at the beginning
        //     viewMode: "years",
        //     minViewMode: "years"
        // });
        $(".delete").click(function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            console.log(id);
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang terhapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/pendonor/destroy/" + id;
                }
            });
        });
    </script>
@endpush

@section('content')
    <div class="card shadow mb-12">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-pmi-primary">Data Pendonor</h6>
            <div>
                <a href="{{ route('pendonor.create') }}" class="btn btn-primary">Tambah</a>
                <a href="{{ url('/report/pendonor/pdf/' . $golongan_darah_export . '/' . $tanggal_export) }}"
                    class="btn btn-success">Export
                    PDF</a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="font-weight-bold text-pmi-primary">Filter Berdasarkan</h5>
            <form action="{{ route('pendonor.filter') }}" method="post" class="row my-3">
                @csrf
                <div class="form-group col-4">
                    <label for="golongan_darah" class="text-black font-weight-bolder">Golongan Darah</label>
                    <select name="golongan_darah" id="golongan_darah" class="form-control">
                        <option value="">Semua Golongan Darah</option>
                        @foreach ($golongan_darahs as $golongan_darah)
                            <option value="{{ $golongan_darah->golongan_darah }}">{{ $golongan_darah->golongan_darah }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="year" class="text-black font-weight-bolder">Bulan Tahun</label>
                    <input type="month" name="tanggal" id="datepicker" class="form-control">
                </div>
                <div class="col-1 align-self-end mb-3">
                    <button class="btn btn-success" id="btn-filter">Filter</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pendonor</th>
                            <th>Nama Pendonor</th>
                            <th>Kelamin</th>
                            <th>Tanggal</th>
                            <th>Golongan Darah</th>
                            @foreach ($kriterias as $kriteria)
                                <th>{{ $kriteria->nama_kriteria }}</th>
                            @endforeach
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($kriterias) and !empty($pendonors) and !empty($pendonor_kriterias))
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pendonors as $pendonor)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pendonor->id_pendonor }}</td>
                                    <td>{{ $pendonor->nama_pendonor }}</td>
                                    <td>{{ $pendonor->kelamin }}</td>
                                    <td>{{ $pendonor->tanggal }}</td>
                                    <td>{{ $pendonor->golongan_darah }}</td>
                                    @foreach ($kriterias as $kriteria)
                                        <td>{{ $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] }}
                                        </td>
                                    @endforeach
                                    <td><a href="{{ route('pendonor.edit', ['id' => $pendonor->id_pendonor]) }}"
                                            class="btn btn-info mx-2 my-2">Edit</a>
                                        <button class="btn btn-danger delete"
                                            data-id="{{ $pendonor->id_pendonor }}">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
