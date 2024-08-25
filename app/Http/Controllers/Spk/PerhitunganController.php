<?php

namespace App\Http\Controllers\Spk;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kriteria;

class PerhitunganController extends Controller
{
    public function index_try()
    {
        $pembagi = array();
        $data = array();
        $bobot = array();
        $normalisasi = array();
        $optimasi = array();
        $min = array();
        $max = array();
        $yi = array();
        $rank = array();
        $rank_sort = array();
        $sort = array();
        $sort_dua = array();
        $sort_tiga = array();

        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::all();

        foreach ($kriterias as $kriteria) {
            $hasil_pembagi = Alternatif::selectRaw('SQRT(SUM(POW(c.nilai, 2))) as pembagi')
                ->leftjoin('detail_alternatif as b', 'alternatif.id_alternatif', '=', 'b.id_alternatif')
                ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                ->where('d.nama_kriteria', $kriteria->nama_kriteria)
                ->first();

            $pembagi[$kriteria->nama_kriteria] = $hasil_pembagi->pembagi;
            $bobot[$kriteria->nama_kriteria] = $kriteria->bobot;
        }

        foreach ($kriterias as $kriteria) {
            foreach ($alternatifs as $alternatif) {
                $all_alternatif = Alternatif::leftjoin('detail_alternatif as b', 'alternatif.id_alternatif', '=', 'b.id_alternatif')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'alternatif.id_alternatif' => $alternatif->id_alternatif])
                    ->first();

                $data[$kriteria->nama_kriteria][$alternatif->id_alternatif] = $all_alternatif->nilai;
            }
        }
        // echo $data["Usia"]["0"];
        // var_dump($data);

        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $data["Usia"][$alternatif->id_alternatif] . " | " . $data["Pendidikan Terakhir"][$alternatif->id_alternatif] . " | " . $data["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] . " | " . $data["Sertifikasi Kompetensi"][$alternatif->id_alternatif] . " | " . $data["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] . " | </br>";
        }

        echo "</br> ================================================ </br>";
        echo "</br> =====================Normaliasasi================== </br>";
        echo "</br> ================================================ </br>";

        foreach ($alternatifs as $alternatif) {
            $normalisasi["Usia"][$alternatif->id_alternatif] = $data["Usia"][$alternatif->id_alternatif] / $pembagi["Usia"];
            $normalisasi["Pendidikan Terakhir"][$alternatif->id_alternatif] = $data["Pendidikan Terakhir"][$alternatif->id_alternatif] / $pembagi["Pendidikan Terakhir"];
            $normalisasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] = $data["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] / $pembagi["Penguasaan Bahasa Asing"];
            $normalisasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] = $data["Sertifikasi Kompetensi"][$alternatif->id_alternatif] / $pembagi["Sertifikasi Kompetensi"];
            $normalisasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] = $data["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] / $pembagi["Pengalaman Kerja Luar Negeri"];
        }

        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $normalisasi["Usia"][$alternatif->id_alternatif] . " | " . $normalisasi["Pendidikan Terakhir"][$alternatif->id_alternatif] . " | " . $normalisasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] . " | " . $normalisasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] . " | " . $normalisasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] . " | </br>";
        }

        // var_dump($normalisasi);

        echo "</br> ================================================ </br>";
        echo "</br> =====================Optimasi Atribut=============== </br>";
        echo "</br> ================================================ </br>";

        foreach ($alternatifs as $alternatif) {
            $optimasi["Usia"][$alternatif->id_alternatif] = $normalisasi["Usia"][$alternatif->id_alternatif] * $bobot["Usia"];
            $optimasi["Pendidikan Terakhir"][$alternatif->id_alternatif] = $normalisasi["Pendidikan Terakhir"][$alternatif->id_alternatif] * $bobot["Pendidikan Terakhir"];
            $optimasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] = $normalisasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] * $bobot["Penguasaan Bahasa Asing"];
            $optimasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] = $normalisasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] * $bobot["Sertifikasi Kompetensi"];
            $optimasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] = $normalisasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] * $bobot["Pengalaman Kerja Luar Negeri"];
        }

        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $optimasi["Usia"][$alternatif->id_alternatif] . " | " . $optimasi["Pendidikan Terakhir"][$alternatif->id_alternatif] . " | " . $optimasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] . " | " . $optimasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] . " | " . $optimasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] . " | </br>";
        }

        // var_dump($optimasi);
        $number = 0;
        foreach ($alternatifs as $alternatif) {
            $max[$alternatif->id_alternatif] =  $optimasi["Pendidikan Terakhir"][$alternatif->id_alternatif] + $optimasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] + $optimasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] + $optimasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif];
            $min[$alternatif->id_alternatif] = $optimasi["Usia"][$alternatif->id_alternatif];
            $yi[$alternatif->id_alternatif] = $min[$alternatif->id_alternatif] + $max[$alternatif->id_alternatif];
            $sort[$alternatif->id_alternatif] = $min[$alternatif->id_alternatif] + $max[$alternatif->id_alternatif];
            $sort_tiga[$alternatif->id_alternatif] = $yi[$alternatif->id_alternatif];
        }

        echo "</br> ================================================ </br>";
        echo "</br> =====================|MAX|MIN|YI|=============== </br>";
        echo "</br> ================================================ </br>";
        rsort($sort);
        $length = count($sort);

        $number_dua = 0;
        // foreach ($alternatifs as $alternatif) {
        //     $sort_dua[$number_dua] = $yi[$alternatif->id_alternatif];
        //     $number_dua++;
        // }

        for ($i = 0; $i < $length; $i++) {
            foreach ($alternatifs as $alternatif) {
                if ($yi[$alternatif->id_alternatif] == $sort[$i]) {
                    $rank[$alternatif->id_alternatif] = $i + 1;
                    // break;
                }
            }

            // $rank[$alternatif->id_alternatif] = $i + 1;
        }



        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $min[$alternatif->id_alternatif] . " | " . $max[$alternatif->id_alternatif] . " | " . $yi[$alternatif->id_alternatif] . " | </>";
        }

        echo "</br> ================================================ </br>";
        echo "</br> ==================Rank========================== </br>";
        echo "</br> ================================================ </br>";
        // foreach ($alternatifs as $alternatif) {
        //     echo "| " . $yi[$alternatif->id_alternatif] . " | " . $rank[$alternatif->id_alternatif] . " | </br>";
        // }

        arsort($sort_tiga);
        // print_r($sort_tiga);

        foreach ($sort_tiga as $key => $value) {
            $number_dua++;
            $rank_sort[$key] = $number_dua;
            // echo $key;
        }

        // var_dump($rank_sort);

        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $min[$alternatif->id_alternatif] . " | " . $max[$alternatif->id_alternatif] . " | " . $yi[$alternatif->id_alternatif] . " | " . $rank_sort[$alternatif->id_alternatif] . " | </br>";
        }
    }

    public function index()
    {
        $pembagi = array();
        $data = array();
        $bobot = array();
        $normalisasi = array();
        $optimasi = array();
        $min = array();
        $max = array();
        $yi = array();
        $rank = array();
        $sort = array();
        $number = 0;

        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::where('tahun', '2022')->get();

        // mengisi value array data dengan nilai setiap sub_kriteria
        foreach ($kriterias as $kriteria) {
            foreach ($alternatifs as $alternatif) {
                $all_alternatif = Alternatif::leftjoin('detail_alternatif as b', 'alternatif.id_alternatif', '=', 'b.id_alternatif')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'alternatif.id_alternatif' => $alternatif->id_alternatif])
                    ->first();

                $data[$kriteria->nama_kriteria][$alternatif->id_alternatif] = $all_alternatif->nilai;
            }
        }
        // mengisi value array data dengan nilai setiap sub_kriteria

        // mengisi value array pembagi dan Bobot
        foreach ($kriterias as $kriteria) {
            $hasil_pembagi = Alternatif::selectRaw('SQRT(SUM(POW(c.nilai, 2))) as pembagi')
                ->leftjoin('detail_alternatif as b', 'alternatif.id_alternatif', '=', 'b.id_alternatif')
                ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'alternatif.tahun' => "2022"])
                ->first();

            $pembagi[$kriteria->nama_kriteria] = $hasil_pembagi->pembagi;
            $bobot[$kriteria->nama_kriteria] = $kriteria->bobot;
        }
        // mengisi value array pembagi dan Bobot

        // mengisi value array normalisasi
        foreach ($alternatifs as $alternatif) {
            $normalisasi["Usia"][$alternatif->id_alternatif] = $data["Usia"][$alternatif->id_alternatif] / $pembagi["Usia"];
            $normalisasi["Pendidikan Terakhir"][$alternatif->id_alternatif] = $data["Pendidikan Terakhir"][$alternatif->id_alternatif] / $pembagi["Pendidikan Terakhir"];
            $normalisasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] = $data["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] / $pembagi["Penguasaan Bahasa Asing"];
            $normalisasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] = $data["Sertifikasi Kompetensi"][$alternatif->id_alternatif] / $pembagi["Sertifikasi Kompetensi"];
            $normalisasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] = $data["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] / $pembagi["Pengalaman Kerja Luar Negeri"];
        }
        // mengisi value array normalisasi

        // mengisi value array optimasi
        foreach ($alternatifs as $alternatif) {
            $optimasi["Usia"][$alternatif->id_alternatif] = $normalisasi["Usia"][$alternatif->id_alternatif] * $bobot["Usia"];
            $optimasi["Pendidikan Terakhir"][$alternatif->id_alternatif] = $normalisasi["Pendidikan Terakhir"][$alternatif->id_alternatif] * $bobot["Pendidikan Terakhir"];
            $optimasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] = $normalisasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] * $bobot["Penguasaan Bahasa Asing"];
            $optimasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] = $normalisasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] * $bobot["Sertifikasi Kompetensi"];
            $optimasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] = $normalisasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] * $bobot["Pengalaman Kerja Luar Negeri"];
        }
        // mengisi value array optimasi

        // mengisi value array max,min,yi,sort
        foreach ($alternatifs as $alternatif) {
            $max[$alternatif->id_alternatif] =  $optimasi["Pendidikan Terakhir"][$alternatif->id_alternatif] + $optimasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] + $optimasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] + $optimasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif];
            $min[$alternatif->id_alternatif] = $optimasi["Usia"][$alternatif->id_alternatif];
            $yi[$alternatif->id_alternatif] = $max[$alternatif->id_alternatif] - $min[$alternatif->id_alternatif];
            $sort[$alternatif->id_alternatif] = $max[$alternatif->id_alternatif] - $min[$alternatif->id_alternatif];
        }
        // mengisi value array max,min,yi,sort

        // mengurutkan dan mengisi array valu rank
        arsort($sort);
        foreach ($sort as $key => $value) {
            $number++;
            $rank[$key] = $number;
        }
        // mengurutkan dan mengisi array valu rank

        echo "</br> ================================================ </br>";
        echo "</br> =======================Alternatif================== </br>";
        echo "</br> ================================================ </br>";

        // Print Alternatif
        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $data["Usia"][$alternatif->id_alternatif] . " | " . $data["Pendidikan Terakhir"][$alternatif->id_alternatif] . " | " . $data["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] . " | " . $data["Sertifikasi Kompetensi"][$alternatif->id_alternatif] . " | " . $data["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] . " | </br>";
        }
        // Print Alternatif


        echo "</br> ================================================ </br>";
        echo "</br> =====================Normaliasasi================== </br>";
        echo "</br> ================================================ </br>";

        // print normalisasi
        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $normalisasi["Usia"][$alternatif->id_alternatif] . " | " . $normalisasi["Pendidikan Terakhir"][$alternatif->id_alternatif] . " | " . $normalisasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] . " | " . $normalisasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] . " | " . $normalisasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] . " | </br>";
        }
        // print normalisasi

        echo "</br> ================================================ </br>";
        echo "</br> =====================Optimasi Atribut=============== </br>";
        echo "</br> ================================================ </br>";

        // print optimasi atribut
        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $optimasi["Usia"][$alternatif->id_alternatif] . " | " . $optimasi["Pendidikan Terakhir"][$alternatif->id_alternatif] . " | " . $optimasi["Penguasaan Bahasa Asing"][$alternatif->id_alternatif] . " | " . $optimasi["Sertifikasi Kompetensi"][$alternatif->id_alternatif] . " | " . $optimasi["Pengalaman Kerja Luar Negeri"][$alternatif->id_alternatif] . " | </br>";
        }
        // print optimasi atribut

        echo "</br> ================================================ </br>";
        echo "</br> =================|MAX|MIN|YI|RANK=============== </br>";
        echo "</br> ================================================ </br>";
        foreach ($alternatifs as $alternatif) {
            echo "| " . $alternatif->nama_tki . " | " . $min[$alternatif->id_alternatif] . " | " . $max[$alternatif->id_alternatif] . " | " . $yi[$alternatif->id_alternatif] . " | " . $rank[$alternatif->id_alternatif] . " | </br>";
        }
    }

    public function indexLoop()
    {
        $pembagi = array();
        $data = array();
        $bobot = array();
        $normalisasi = array();
        $optimasi = array();
        $min = array();
        $max = array();
        $yi = array();
        $rank = array();
        $sort = array();
        $number = 0;
        $nama = array();

        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::where('tahun', '2022')->get();

        // mengisi value array data dengan nilai setiap sub_kriteria

        foreach ($alternatifs as $alternatif) {
            $nama[$alternatif->id_alternatif] = $alternatif->nama_tki;
        }
        foreach ($kriterias as $kriteria) {
            foreach ($alternatifs as $alternatif) {
                $all_alternatif = Alternatif::leftjoin('detail_alternatif as b', 'alternatif.id_alternatif', '=', 'b.id_alternatif')
                    ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                    ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                    ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'alternatif.id_alternatif' => $alternatif->id_alternatif])
                    ->first();

                $data[$kriteria->nama_kriteria][$alternatif->id_alternatif] = $all_alternatif->nilai;
            }
        }
        // mengisi value array data dengan nilai setiap sub_kriteria

        // mengisi value array pembagi dan Bobot
        foreach ($kriterias as $kriteria) {
            $hasil_pembagi = Alternatif::selectRaw('SQRT(SUM(POW(c.nilai, 2))) as pembagi')
                ->leftjoin('detail_alternatif as b', 'alternatif.id_alternatif', '=', 'b.id_alternatif')
                ->leftjoin('sub_kriteria as c', 'b.id_sub_kriteria', '=', 'c.id_sub_kriteria')
                ->leftjoin('kriteria as d', 'c.id_kriteria', '=', 'd.id_kriteria')
                ->where(['d.nama_kriteria' => $kriteria->nama_kriteria, 'alternatif.tahun' => "2022"])
                ->first();

            $pembagi[$kriteria->nama_kriteria] = $hasil_pembagi->pembagi;
            $bobot[$kriteria->nama_kriteria] = $kriteria->bobot;
        }
        // mengisi value array pembagi dan Bobot

        // mengisi value array normalisasi
        foreach ($kriterias as $kriteria) {
            foreach ($alternatifs as $alternatif) {
                $normalisasi[$kriteria->nama_kriteria][$alternatif->id_alternatif] = $data[$kriteria->nama_kriteria][$alternatif->id_alternatif] / $pembagi[$kriteria->nama_kriteria];
            }
        }
        // mengisi value array normalisasi

        // mengisi value array optimasi
        foreach ($kriterias as $kriteria) {
            foreach ($alternatifs as $alternatif) {
                $optimasi[$kriteria->nama_kriteria][$alternatif->id_alternatif] = $normalisasi[$kriteria->nama_kriteria][$alternatif->id_alternatif] * $bobot[$kriteria->nama_kriteria];
            }
        }
        // mengisi value array optimasi

        // mengisi value array max,min,yi,sort

        foreach ($alternatifs as $alternatif) {
            $maximal = 0;
            $minimal = 0;
            foreach ($kriterias as $kriteria) {
                if ($kriteria->jenis == 'Benefit') {
                    $maximal += $optimasi[$kriteria->nama_kriteria][$alternatif->id_alternatif];
                    $max[$alternatif->id_alternatif] = $maximal;
                } elseif ($kriteria->jenis == 'Cost') {
                    $minimal += $optimasi[$kriteria->nama_kriteria][$alternatif->id_alternatif];
                    $min[$alternatif->id_alternatif] = $minimal;
                }
            }
        }

        foreach ($alternatifs as $alternatif) {
            $yi[$alternatif->id_alternatif] = $max[$alternatif->id_alternatif] - $min[$alternatif->id_alternatif];
            $sort[$alternatif->id_alternatif] = $max[$alternatif->id_alternatif] - $min[$alternatif->id_alternatif];
        }
        // mengisi value array max,min,yi,sort

        // Ranking variable rank
        arsort($sort);
        foreach ($sort as $key => $value) {
            $number++;
            $rank[$key] = $number;
        }
        // Ranking variable rank

        // Print Normalisasi with loop
        // foreach ($kriterias as $kriteria) {
        //     echo " | " . $kriteria->nama_kriteria . " | </br>";
        //     foreach ($alternatifs as $alternatif) {
        //         echo " | " . $normalisasi[$kriteria->nama_kriteria][$alternatif->id_alternatif] . " | </br>";
        //     }
        // }
        // Print Normalisasi with loop

        // Print Optimasi with loop
        // foreach ($kriterias as $kriteria) {
        //     echo " | " . $kriteria->nama_kriteria . " | </br>";
        //     foreach ($alternatifs as $alternatif) {
        //         echo $nama[$alternatif->id_alternatif] . " | " . $optimasi[$kriteria->nama_kriteria][$alternatif->id_alternatif] . " | </br>";
        //     }
        // }
        // Print Optimasi with loop

        foreach ($alternatifs as $alternatif) {
            echo $nama[$alternatif->id_alternatif] . " | " . $min[$alternatif->id_alternatif]  . " | " . $max[$alternatif->id_alternatif] . " | " . $yi[$alternatif->id_alternatif] . " | " . $rank[$alternatif->id_alternatif] . " | </br>";
        }
    }
}
