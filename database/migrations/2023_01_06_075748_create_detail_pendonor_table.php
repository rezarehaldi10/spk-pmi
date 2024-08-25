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
        Schema::create('detail_pendonor', function (Blueprint $table) {
            $table->id();
            $table->char('id_pendonor');
            $table->char('id_sub_kriteria');

            $table->foreign('id_pendonor')
                ->references('id_pendonor')
                ->on('pendonor')->onDelete('cascade');

            $table->foreign('id_sub_kriteria')
                ->references('id_sub_kriteria')
                ->on('sub_kriteria')->onDelete('cascade');

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
        Schema::dropIfExists('detail_pendonor');
    }
};
