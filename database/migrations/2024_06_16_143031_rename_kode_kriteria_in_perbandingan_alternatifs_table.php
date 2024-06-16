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
        Schema::table('perbandingan_alternatifs', function (Blueprint $table) {
            $table->renameColumn('kode_kriteria', 'kriteria_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perbandingan_alternatifs', function (Blueprint $table) {
            $table->renameColumn('kriteria_id', 'kode_kriteria');
        });
    }
};
