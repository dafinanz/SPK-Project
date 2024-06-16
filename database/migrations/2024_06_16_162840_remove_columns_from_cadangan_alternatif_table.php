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
        Schema::table('cadangan_alternatif', function (Blueprint $table) {
            $table->dropColumn(['nkk', 'nik', 'alamat', 'nomor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cadangan_alternatif', function (Blueprint $table) {
            $table->string('nkk');
            $table->string('nik');
            $table->string('alamat');
            $table->string('nomor');
        });
    }
};
