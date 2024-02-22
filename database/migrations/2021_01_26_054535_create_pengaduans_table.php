<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pengaduan')->unique();
            $table->string('judul_laporan');
            $table->string('nis');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp', 12);
            $table->string('alamat');
            $table->enum('jenis_pengaduan', ['pengaduan', 'aspirasi']);
            $table->enum('kategori_pengaduan', ['akademik', 'fasilitas', 'keamanan', 'lainnya']);
            $table->date('tanggal_laporan');
            $table->text('laporan');
            $table->string('berkas_pendukung')->nullable();
            $table->string('gambar')->nullable();
            $table->enum('status', ['pending', 'sukses', 'ditolak']);
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
        Schema::dropIfExists('pengaduans');
    }
}
