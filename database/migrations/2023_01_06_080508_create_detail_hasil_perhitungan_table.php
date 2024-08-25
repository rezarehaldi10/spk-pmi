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
        Schema::create('detail_hasil_perhitungan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alternatif');
            $table->string('id_hasil_perhitungan');
            $table->string('id_pendonor');
            $table->decimal('yi', 4, 3);
            $table->integer('ranking');
            $table->string('status');

            $table->foreign('id_pendonor')
                ->references('id_pendonor')
                ->on('pendonor')->onDelete('cascade');

            $table->foreign('id_hasil_perhitungan')
                ->references('id_hasil_perhitungan')
                ->on('hasil_perhitungan')->onDelete('cascade');

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
        Schema::dropIfExists('detail_hasil_perhitungan');
    }
};
