<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('nik');
            $table->char('nomorkk');
            $table->string('fotoktp');
            $table->string('fotokk');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('provinsi');
            $table->string('kab/kota');
            $table->string('kecamatan');
            $table->string('kelurahan/desa');
            $table->string('alamat');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('penghasilan_sebpandemi');
            $table->integer('penghasilan_sudpandemi');
            $table->string('alasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};
