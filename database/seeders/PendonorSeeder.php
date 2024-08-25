<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pendonor;
use Illuminate\Support\Carbon;

class PendonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = (object)[
            [
                "id_pendonor"=> "P00001",
                "nama_pendonor"=> "ERA PRASETYA SUKSESWATI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00002",
                "nama_pendonor"=> "RANGGA KURNIAWAN B S",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00003",
                "nama_pendonor"=> "TRI AGUNG LITA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00004",
                "nama_pendonor"=> "ANISAH",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00005",
                "nama_pendonor"=> "MUHAMMAD HABIBIL MAHBUB",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00006",
                "nama_pendonor"=> "TEDDY PURWANTONO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00007",
                "nama_pendonor"=> "YOFIN JOHN CHRISTIAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00008",
                "nama_pendonor"=> "SUPENO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00009",
                "nama_pendonor"=> "HATTA MASHAR",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00010",
                "nama_pendonor"=> "HADI WIBOWO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00011",
                "nama_pendonor"=> "ARIF YUNIARTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00012",
                "nama_pendonor"=> "SULAIMAN RHOSYID",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00013",
                "nama_pendonor"=> "NURMANSYAH",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00014",
                "nama_pendonor"=> "ROSALINA ANA N.SOMI",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00015",
                "nama_pendonor"=> "DENDI BINTORO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00016",
                "nama_pendonor"=> "ENDRO KUSUMO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00017",
                "nama_pendonor"=> "RACHMAD DENY DWISETYAWAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00018",
                "nama_pendonor"=> "YAZID",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00019",
                "nama_pendonor"=> "MOCH. NUR HISYAM",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00020",
                "nama_pendonor"=> "SUYITNO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00021",
                "nama_pendonor"=> "DEDY ZAINUDIN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00022",
                "nama_pendonor"=> "HERY SUGIANTO KOESOEMOH",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00023",
                "nama_pendonor"=> "ARIANTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00024",
                "nama_pendonor"=> "SURACHMAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00025",
                "nama_pendonor"=> "YUWONO SIDIK",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00026",
                "nama_pendonor"=> "ZARNUQI SAMBAYON ADI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00027",
                "nama_pendonor"=> "ROCHIM SOEYOTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00028",
                "nama_pendonor"=> "MAHARANI",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00029",
                "nama_pendonor"=> "ANINA RACHMANIA",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00030",
                "nama_pendonor"=> "PAMUNGKAS",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00031",
                "nama_pendonor"=> "TITIK ENDANG",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00032",
                "nama_pendonor"=> "MUSAFAK",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00033",
                "nama_pendonor"=> "SLAMET RIYANTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00034",
                "nama_pendonor"=> "MISADI SUMARGO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00035",
                "nama_pendonor"=> "WAHYUDI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00036",
                "nama_pendonor"=> "FABIAN GUNAWAN IRYANTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00037",
                "nama_pendonor"=> "RONSON",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00038",
                "nama_pendonor"=> "EKO HENDRIK",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00039",
                "nama_pendonor"=> "I`IN TRI WULANDARI",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-07",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00040",
                "nama_pendonor"=> "SETIAWATI",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00041",
                "nama_pendonor"=> "ANGGA PRABADI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00042",
                "nama_pendonor"=> "ADI HARDONO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00043",
                "nama_pendonor"=> "AKHMAD DIMYATI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00044",
                "nama_pendonor"=> "WAHYU WIDODO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00045",
                "nama_pendonor"=> "ARIFAH ISMI AMBIYA",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00046",
                "nama_pendonor"=> "YOSA HADARISMA.A",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00047",
                "nama_pendonor"=> "ARIS NURYONO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00048",
                "nama_pendonor"=> "OKRIYANTO HANDOYO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00049",
                "nama_pendonor"=> "METTA ADITHIA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00050",
                "nama_pendonor"=> "NUR UTOMO G.H",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00051",
                "nama_pendonor"=> "M.DHITYA PRAMANA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00052",
                "nama_pendonor"=> "MADI SUHARDJO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00053",
                "nama_pendonor"=> "RANDY KRISNA PUTRA M",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00054",
                "nama_pendonor"=> "KUNCORO GUNAWAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00055",
                "nama_pendonor"=> "DEDDY FEBRIANTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00056",
                "nama_pendonor"=> "TOMMY TRI ERMONO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00057",
                "nama_pendonor"=> "MIFTAKHUR CHOIR",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00058",
                "nama_pendonor"=> "BAMBANG SUGIHARTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00059",
                "nama_pendonor"=> "DADANG HERMANTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00060",
                "nama_pendonor"=> "ALWIN PRIYOBUDIARTHO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00061",
                "nama_pendonor"=> "SUGIHARTO TJOKRO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00062",
                "nama_pendonor"=> "ROCKY ALFIAN ISKANDAR",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00063",
                "nama_pendonor"=> "FAJAR JANUAR AULIA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00064",
                "nama_pendonor"=> "REBETA SEHKAR MEHTA",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00065",
                "nama_pendonor"=> "YAHYA MAULANA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00066",
                "nama_pendonor"=> "WAHYU EKA PRATAMA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00067",
                "nama_pendonor"=> "ABDUL WACHID",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00068",
                "nama_pendonor"=> "FERRIE WIDYA REPELITA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00069",
                "nama_pendonor"=> "PERDANA LAFI R",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00070",
                "nama_pendonor"=> "DEDY HENDRANA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00071",
                "nama_pendonor"=> "MEIDIAS JOHANIS",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00072",
                "nama_pendonor"=> "DANIEL BRIAN IMAWAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00073",
                "nama_pendonor"=> "SUROSO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00074",
                "nama_pendonor"=> "KUNTHY  HARYANI",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00075",
                "nama_pendonor"=> "RIFALDHY HANGGA PUTRA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00076",
                "nama_pendonor"=> "IDA BAGUS OKA MAHENDRA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00077",
                "nama_pendonor"=> "ASTITA ADI MARTA",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00078",
                "nama_pendonor"=> "AGFANDIO KUMARA M",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00079",
                "nama_pendonor"=> "MUDJIONO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00080",
                "nama_pendonor"=> "BOEDI SASONO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00081",
                "nama_pendonor"=> "HERLINASARI LAKSMONO",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00082",
                "nama_pendonor"=> "P ARDIANTA WIBAWA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00083",
                "nama_pendonor"=> "JIMMY WOEN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00084",
                "nama_pendonor"=> "FAHRUL AGUS F",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00085",
                "nama_pendonor"=> "ANDRY SETYAWAN R",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00086",
                "nama_pendonor"=> "YOHANSEN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00087",
                "nama_pendonor"=> "TAN RUDI SETIAWAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00088",
                "nama_pendonor"=> "TRI IS WAHYU P",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00089",
                "nama_pendonor"=> "MARTINUS JOKO SN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00090",
                "nama_pendonor"=> "ANTONIUS GUSTI SATRIO  H",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00091",
                "nama_pendonor"=> "SUGIATNO SUTJIPTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00092",
                "nama_pendonor"=> "MOCH RIFCHI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00093",
                "nama_pendonor"=> "INTOYO BUDI S.",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00094",
                "nama_pendonor"=> "ANGGARA FAJAR",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00095",
                "nama_pendonor"=> "FEBRIYANTI",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00096",
                "nama_pendonor"=> "DIONISIUS PUTRA HERMANU",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00097",
                "nama_pendonor"=> "RONY HARLY",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00098",
                "nama_pendonor"=> "CHRISTIAN ARI S",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00099",
                "nama_pendonor"=> "SUDJARWO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00100",
                "nama_pendonor"=> "PANJI DWI PRASETYO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-09",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00101",
                "nama_pendonor"=> "WARSITO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00102",
                "nama_pendonor"=> "FATKHUL AMIN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00103",
                "nama_pendonor"=> "SUGI SLAMET RIYADI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00104",
                "nama_pendonor"=> "SAIFUDIN  LUTFI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00105",
                "nama_pendonor"=> "TOMMY ALFAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "A"
            ],
            [
                "id_pendonor"=> "P00106",
                "nama_pendonor"=> "ALI SUSANTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00107",
                "nama_pendonor"=> "PRAYUGI IMADUDDIN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00108",
                "nama_pendonor"=> "EKO BARUNA BAKTI",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00109",
                "nama_pendonor"=> "AGUS SULAIMAN",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00110",
                "nama_pendonor"=> "ABDI NURRACMAD PUTRA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "B"
            ],
            [
                "id_pendonor"=> "P00111",
                "nama_pendonor"=> "CHRYSSANTANIA MAQFIRRA E",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00112",
                "nama_pendonor"=> "HANDRA NUREKA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00113",
                "nama_pendonor"=> "DEWI FATIMAH",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00114",
                "nama_pendonor"=> "ACHMAD HUSNI THAMRIN IR",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00115",
                "nama_pendonor"=> "YUVIANTO NOVEMBRA S",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "AB"
            ],
            [
                "id_pendonor"=> "P00116",
                "nama_pendonor"=> "TITTO FERIMANDJANTO",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00117",
                "nama_pendonor"=> "BENEDICTUS TRI AGUNG R",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00118",
                "nama_pendonor"=> "NURNANINGSIH",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00119",
                "nama_pendonor"=> "AZZAHRA NABILA A",
                "kelamin"=> "P",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "O"
            ],
            [
                "id_pendonor"=> "P00120",
                "nama_pendonor"=> "ANDRE PRATAMA PUTRA",
                "kelamin"=> "L",
                "tanggal"=> "2023-01-23",
                "golongan_darah"=> "O"
            ]
        ];

        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                $pendonor = new Pendonor;
                $pendonor->id_pendonor = $seed["id_pendonor"];
                $pendonor->nama_pendonor = $seed["nama_pendonor"];
                $pendonor->kelamin = $seed["kelamin"];
                $pendonor->tanggal = $seed["tanggal"];
                $pendonor->golongan_darah = $seed["golongan_darah"];
                $pendonor->save();
                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                $ex->getMessage();
            }
        }
    }
}
