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
        Schema::table('kriterias', function (Blueprint $table) {
            $table->string('atribut')->nullable()->change();
            $table->double('bobot')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kriterias', function (Blueprint $table) {
            $table->string('atribut')->change();
            $table->double('bobot')->change();
        });
    }
};