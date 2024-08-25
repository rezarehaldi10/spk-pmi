@extends('admin.layouts.app')

@section('title')
    Sub Kriteria
@endsection

@push('after-style')
    <link href="{{ asset('SBadmin2/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
    <script src="{{ asset('SBadmin2/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('SBadmin2/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('#dataTable').DataTable({
            paging: false,
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
                    window.location.href = "/subkriteria/destroy/" + id;
                }
            });
        });
    </script>
@endpush

@section('content')
    <div class="card shadow mb-12">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-bp2mi-primary">Data Sub Kriteria</h6>
            @if (Auth::guard('user')->user()->role == 'admin')
            <a href="{{ route('subkriteria.create') }}" class="btn btn-primary">Tambah</a>
            @endif
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Sub Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Nama Sub Kriteria</th>
                            <th>Nilai</th>
                            @if (Auth::guard('user')->user()->role == 'admin')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($sub_kriteria))
                            @foreach ($sub_kriteria as $data)
                                <tr>
                                    <td>{{ $data->id_sub_kriteria }}</td>
                                    <td>{{ $data->nama_kriteria }}</td>
                                    <td>{{ $data->nama_sub_kriteria }}</td>
                                    <td>{{ $data->nilai }}</td>
                                    @if (Auth::guard('user')->user()->role == 'admin')
                                    <td>
                                        <a href="{{ route('subkriteria.edit', ['id' => $data->id_sub_kriteria]) }}"
                                            class="btn btn-info mx-2">Edit</a>
                                        {{-- <a href="{{ route('subkriteria.destroy', ['id' => $data->id_sub_kriteria]) }}"
                                            class="btn btn-danger">Hapus</a> --}}
                                        <button class="btn btn-danger delete"
                                            data-id="{{ $data->id_sub_kriteria }}">Hapus</button>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
