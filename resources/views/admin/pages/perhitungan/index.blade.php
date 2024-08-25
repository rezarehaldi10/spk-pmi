@extends('admin.layouts.app')

@section('title')
    Perhitungan
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
        pendonorCheck = [];
        const noCheck = [];
        const dataPendonor = [];

        function propHitung() {
            if (pendonorCheck === undefined || pendonorCheck.length < 2) {
                $('#card-hitung').addClass("disabled");
                $('#label-hitung').addClass("disabled");
                $('#btn-hitung').prop("disabled", true);
                $('#jumlah').val("");
                $('#jumlah').prop("readonly", true);
            } else {
                $('#card-hitung').removeClass("disabled");
                $('#label-hitung').removeClass("disabled");
                $('#btn-hitung').removeAttr("disabled");
                $('#jumlah').removeAttr("readonly");
            }
        }

        $('#allCheck').click(function() {
            pendonorCheck = [];
            $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
            $('.check-pendonor').each(function(el) {
                if ($(this).prop('checked') == true) {
                    pendonorCheck.push($(this).val());
                    noCheck.push($(this).closest('tr').find('.no').html());
                } else {
                    let indexpendonorCheck = pendonorCheck.indexOf($(this).val());
                    let indexNoCheck = noCheck.indexOf($(this).closest('tr').find('.no').html());
                    pendonorCheck.splice(indexpendonorCheck, 1);
                    noCheck.splice(indexNoCheck, 1);
                }
            });
            propHitung()
        });

        $('.check-pendonor').each(function(el) {
            $(this).click(function(el) {
                if ($(this).prop('checked') == true) {
                    pendonorCheck.push($(this).val());
                    noCheck.push($(this).closest('tr').find('.no').html());
                } else {
                    let indexpendonorCheck = pendonorCheck.indexOf($(this).val());
                    let indexNoCheck = noCheck.indexOf($(this).closest('tr').find('.no').html());
                    pendonorCheck.splice(indexpendonorCheck, 1);
                    noCheck.splice(indexNoCheck, 1);
                }
                propHitung();
            });
        });

        $('#btn-hitung').on('click', function(e) {
            e.preventDefault();
            let jumlah = $('#jumlah').val();
            if (jumlah == "" || !(/[0-9]/.test(jumlah))) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "Field jumlah tidak boleh kosong dan hanya angka",
                    customClass: 'swal-height'
                })
            } else {
                pendonorCheck.forEach(function(el, index) {
                    dataPendonor.push({
                        no: noCheck[index],
                        id_pendonor: pendonorCheck[index]
                    });
                });
                dataPendonor.sort((a, b) => a.no - b.no);
                data_pendonor = JSON.stringify(dataPendonor);
                fetch("{{ route('perhitungan.store') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            jumlah: jumlah,
                            data_pendonor: data_pendonor
                        }),
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: "Perhitungan Berhasil",
                            customClass: 'swal-height'
                        })
                        window.location.href = "/perhitungan/show/" + data.id_hasil_perhitungan;
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }

        });
    </script>
@endpush

@section('content')
    <div class="card shadow mb-12">
        <div class="card-header d-flex justify-content-between py-3 align-items-center">
            <h6 class="m-0 font-weight-bold text-bp2mi-primary">Perhitungan Pendonor</h6>
        </div>
        <div class="card-body">
            <div class="row my-0">
                <div class="col-6 mx-2 mb-5">
                    <!-- <div class="card-body"> -->
                    <h5 class="font-weight-bold text-bp2mi-primary">Filter Berdasarkan</h5>
                    <form action="{{ route('perhitungan.filter') }}" method="post" class="row">
                        @csrf
                        <div class="form-group col-4">
                            <label for="golongan_darah" class="text-black font-weight-bolder">Golongan Darah</label>
                            <select name="golongan_darah" id="golongan_darah" class="form-control">
                                <option value="">Semua Golongan Darah</option>
                                @foreach ($golongan_darahs as $golongan_darah)
                                    <option value="{{ $golongan_darah->golongan_darah }}">
                                        {{ $golongan_darah->golongan_darah }}
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
                    <!-- </div> -->
                </div>
                <div class="col-5 mx-2 mb-5 disabled perhitungan" id="card-hitung">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="font-weight-bold text-bp2mi-primary disabled" id="label-hitung">Pendonor Dihitung
                            </h5>
                            <div class="form-group">
                                <label for="jumlah" class="text-black font-weight-bolder">Jumlah Pendonor</label>
                                <input type="text" id="jumlah" class="form-control" name="jumlah" readonly>
                            </div>
                        </div>
                        <div class="col align-self-center">
                            <button class="btn btn-outline-primary mt-5" disabled id="btn-hitung">Hitung</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" id="allCheck" type="checkbox" value="" checked">
                                    <label class="form-check-label" for="flexCheckChecked">Pilih Semua</label>
                                </div>
                            </th>
                            <th>No</th>
                            <th>ID Pendonor</th>
                            <th>Nama Pendonor</th>
                            <th>Kelamin</th>
                            <th>Tanggal</th>
                            <th>Golongan Darah</th>
                            @foreach ($kriterias as $kriteria)
                                <th>{{ $kriteria->nama_kriteria }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($kriterias) and !empty($pendonors) and !empty($nilai_kriterias))
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pendonors as $pendonor)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-solid">
                                            <input class="form-check-input check-pendonor" id="flexCheckSolidChecked"
                                                type="checkbox" value="{{ $pendonor->id_pendonor }}"">
                                        </div>
                                    </td>
                                    <td class="no">{{ $no++ }}</td>
                                    <td>{{ $pendonor->id_pendonor }}</td>
                                    <td>{{ $pendonor->nama_pendonor }}</td>
                                    <td>{{ $pendonor->kelamin }}</td>
                                    <td>{{ $pendonor->tanggal }}</td>
                                    <td>{{ $pendonor->golongan_darah }}</td>
                                    @foreach ($kriterias as $kriteria)
                                        <td>{{ $nilai_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
