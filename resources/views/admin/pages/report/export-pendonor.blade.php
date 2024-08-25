<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <tr>
                <td><img src="{{ public_path('SBAdmin2/assets/img/logopmi.png') }}" width="100" height="116"></td>
                <td>
                    <center>
                        <font size="4">PALANG MERAH INDONESIA KOTA SURABAYA</font><br>
                        <font size="5"><b>UNIT DONOR DARAH PALANG MERAH INDONESIA</b></font><br>
                        {{-- <font size="2">Bidang Keahlian : Bisnis dan Menejemen - Teknologi informasi dan Komunikasi
                    </font><br> --}}
                        <font size="2">Jl. Embong Ploso No.7-15, Embong Kaliasin, Genteng, Surabaya, Jawa Timur / Tlp.
                            031-5313289</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            {{-- <table width="500">
                <tr>
                    <td class="text2">Jember, 16 mei 2019</td>
                </tr>
            </table> --}}
        </table>
        <table style="margin-top: 30px;">
            <tr class="text2">
                <td>Tanggal</td>
                <td>: {{ $tanggal }}</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>: Laporan Data Pendonor</td>
            </tr>
        </table>
        <br>
        <h3>Laporan Pendonor
            {{ $golongan_darah == 'null' ? 'Semua Golongan Darah' : 'Golongan Darah ' . $golongan_darah }} &
            {{ $bulan_tahun == 'null' ? 'Semua Bulan' : 'Bulan Tahun ' . $bulan_tahun }}</h3>
        <table width="100%" style="border: 1px solid; border-collapse: collapse;">
            <thead>
                <th style="border: 1px solid;">No</th>
                <th style="border: 1px solid;">ID Pendonor</th>
                <th style="border: 1px solid;">Nama Pendonor</th>
                <th style="border: 1px solid;">Kelamin</th>
                <th style="border: 1px solid;">Tanggal</th>
                <th style="border: 1px solid;">Golongan Darah</th>
                @foreach ($kriterias as $kriteria)
                    <th style="border: 1px solid;">{{ $kriteria->nama_kriteria }}</th>
                @endforeach
            </thead>
            <tbody>
                @if (!empty($kriterias) and !empty($pendonors) and !empty($pendonor_kriterias))
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pendonors as $pendonor)
                        <tr>
                            <td style="border: 1px solid; text-align: center;">{{ $no++ }}</td>
                            <td style="border: 1px solid; text-align: center;">{{ $pendonor->id_pendonor }}</td>
                            <td style="border: 1px solid; text-align: center;">{{ $pendonor->nama_pendonor }}</td>
                            <td style="border: 1px solid; text-align: center;">{{ $pendonor->kelamin }}</td>
                            <td style="border: 1px solid; text-align: center;">{{ $pendonor->tanggal }}</td>
                            <td style="border: 1px solid; text-align: center;">{{ $pendonor->golongan_darah }}</td>
                            @foreach ($kriterias as $kriteria)
                                <td style="border: 1px solid; text-align: center;">
                                    {{ $pendonor_kriterias[$kriteria->nama_kriteria][$pendonor->id_pendonor] }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{-- <table width="500">
            <tr>
                <td>
                    <font size="2">Kpd yth.<br>Siswa Smk Baitul Hikmah kelas x<br>Di tempat</font>
                </td>
            </tr>
        </table>
        <br> --}}
        {{-- <table width="520">
            <tr>
                <td>
                    <font size="2">Assalamu'alaikum wr.wb<br>Dalam rangka praktikum simulasi digital yg jatuh pada
                        tanggal 16 mei 2019
                        Siswa smk baitul hikmah <b>kelas X</b> akan mengadakan peraktikum, jadi di harapkan siswa di
                        minta hadir
                        pada tempat yang sudah di siapkan.</font>
                </td>
            </tr>
        </table>
        <br>
        </table>
        <table>
            <tr class="text2">
                <td>Hari Tanggal</td>
                <td width="520">: <b>Selasa/16 mei 2019</b></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td width="520">: 08:30</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td width="520">: Ruang lap komputer</td>
            </tr>
        </table>
        <br>
        <table width="520">
            <tr>
                <td>
                    <font size="2">Diharapkan atas kehadiranya, Demikian surat ini di sampaikan, atas perhatian
                        dan kerjasamanya kami
                        ucapkan terima kasih.<br><br>Wassalamu'alaikum wr.wb.
                    </font>
                </td>
            </tr>
        </table>
        <br> --}}
        {{-- <table width="520">
            <tr>
                <td width="430"><br><br><br><br></td>
                <td class="text" align="center">Wali kelas<br><br><br><br>Bpk Fauzy.s.kom</td>
            </tr>
        </table> --}}
    </center>
</body>

</html>
