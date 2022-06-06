<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoboffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joboffers', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalPenerimaan');
            $table->date('tanggalPenutupan');
            $table->integer('jumlahLowongan');
            $table->text('deskripsi');
            $table->string('kategori');
            $table->string('gambarProfilPerusahaan')->nullable();
            $table->string('namajoboffer');
            $table->foreignId('idPerusahaan');
            $table->foreign('idPerusahaan')->references('id')->on('perusahaans')->onDelete('cascade');

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
        Schema::dropIfExists('joboffers');
    }
}
