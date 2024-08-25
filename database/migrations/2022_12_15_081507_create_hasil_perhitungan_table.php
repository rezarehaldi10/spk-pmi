<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_perhitungan', function (Blueprint $table) {
            $table->string('id_hasil_perhitungan');
            $table->primary('id_hasil_perhitungan');
            $table->date('tanggal_hasil_perhitungan');
            $table->integer('jumlah_dihitung');
            $table->integer("jumlah_diterima");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_perhitungan');
    }
};
