<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistjoboffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlistjoboffers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idJobOffer');
            $table->foreign('idJobOffer')->references('id')->on('joboffers')->onDelete('cascade');
            $table->foreignId('idAkun');
            $table->foreign('idAkun')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('wishlistjoboffers');
    }
}
