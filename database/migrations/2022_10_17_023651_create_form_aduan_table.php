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
        Schema::create('form_aduan', function (Blueprint $table) {
            $table->string('ID_ADUAN');
            $table->string('NO_INVENTARIS');
            $table->string('STATUS_PERANGKAT');
            $table->string('TANGGAL');
            $table->string('NAMA_PENGGUNA');
            $table->string('NAMA_MENGETAHUI');
            $table->string('BADGE_MENGETAHUI');
            $table->string('NAMA_KONTAK');
            $table->string('NO_WHATSAPP');
            $table->string('ID_UNIT_KERJA');
            $table->string('LOKASI');
            $table->string('EMAIL_PENGGUNA');
            $table->string('EMAIL_MENGETAHUI');
            $table->string('PENERIMA_ADUAN');
            $table->string('DESKRIPSI_ADUAN');
            $table->string('KETERANGAN');
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
        Schema::dropIfExists('form_aduan');
    }
};
