@extends('admin.layouts.app')

@section('title')
    Petugas
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
                    window.location.href = "/petugas/destroy/" + id;
                }
            });
        });
    </script>
@endpush

@section('content')
    <div class="card shadow mb-12">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-pmi-primary">Data Petugas</h6>
            @if (Auth::guard('user')->user()->role == 'admin')
            <a href="{{ route('petugas.create') }}" class="btn btn-primary">Tambah</a>
            @endif
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Role</th>
                            @if (Auth::guard('user')->user()->role == 'admin')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($petugas))
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($petugas as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>
                                        {{ $data->username }}
                                    </td>
                                    <td>{{ $data->role }}</td>

                                    @if (Auth::guard('user')->user()->role == 'admin')
                                    <td>
                                        <a href="{{ route('petugas.edit', ['id' => $data->id_user]) }}"
                                            class="btn btn-info mx-2">Edit</a>
                                        {{-- <a href="{{ route('petugas.destroy', ['id' => $data->id_user]) }}"
                                            class="btn btn-danger">Hapus</a> --}}
                                        <button class="btn btn-danger delete" data-id="{{ $data->id_user }}">Hapus</button>
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
