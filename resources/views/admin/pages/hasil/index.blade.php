@extends('admin.layouts.app')

@section('title')
    Hasil
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
                    window.location.href = "/perhitungan/destroy/" + id;
                }
            });
        });
    </script>
@endpush

@section('content')
    <div class="card shadow mb-12">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-pmi-primary">Data Hasil Perhitungan</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Hasil Perhitungan</th>
                            <th>Tanggal</th>
                            <th>Jumlah Dihitung</th>
                            <th>Jumlah Diterima</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($hasil_perhitungan))
                            @foreach ($hasil_perhitungan as $data)
                                <tr>
                                    <td>{{ $data->id_hasil_perhitungan }}</td>
                                    <td>
                                        @php
                                            $date = date_create($data->tanggal_hasil_perhitungan);
                                            echo date_format($date, 'd-m-Y');
                                        @endphp
                                    </td>
                                    <td>{{ $data->jumlah_dihitung }}</td>
                                    <td>{{ $data->jumlah_diterima }}</td>
                                    <td>
                                        <a href="{{ route('perhitungan.show', ['id' => $data->id_hasil_perhitungan]) }}"
                                            class="btn btn-info mx-2">Detail</a>
                                        <a href="{{ route('export.hasil.pdf', ['id' => $data->id_hasil_perhitungan]) }}"
                                            class="btn btn-success mx-2">Export PDF</a>
                                        <button class="btn btn-danger delete"
                                            data-id="{{ $data->id_hasil_perhitungan }}">Hapus</button>
                                        {{-- <a href="" class="btn btn-danger">Hapus</a> --}}
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
