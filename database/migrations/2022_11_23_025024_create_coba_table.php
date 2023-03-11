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
        Schema::create('coba', function (Blueprint $table) {
            $table->id();
            $table->string('NO_BAST', 150);
            $table->string('NO_INVENTARIS', 150);
            $table->string('TANGGAL', 150);
            $table->string('NAMA_MENYERAHKAN', 150);
            $table->string('BADGE_MENYERAHKAN', 150);
            $table->string('JABATAN_MENYERAHKAN', 150);
            $table->string('NAMA_MENERIMA', 150);
            $table->string('BADGE_MENERIMA', 150);
            $table->string('JABATAN_MENERIMA', 150);
            $table->string('KETERANGAN', 150);
            $table->string('NAMA_PENGGUNA', 150);
            $table->string('BADGE_PENGGUNA', 150);
            $table->string('JABATAN_PENGGUNA', 150);
            $table->string('LOKASI', 150);
            $table->string('ID_UNIT_KERJA', 150);
            $table->string('TELEPON', 150);
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
        Schema::dropIfExists('coba');
    }
};
