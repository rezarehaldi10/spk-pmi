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
        Schema::create('sub_kriteria', function (Blueprint $table) {
            $table->char('id_sub_kriteria');
            $table->primary('id_sub_kriteria');
            $table->char('id_kriteria');
            $table->string('nama_sub_kriteria');
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('id_kriteria')
                ->references('id_kriteria')
                ->on('kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_kriteria');
    }
};
