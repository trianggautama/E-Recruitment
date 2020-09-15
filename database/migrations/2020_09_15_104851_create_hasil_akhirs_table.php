<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilAkhirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_akhirs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('peserta_id');
            $table->foreign('peserta_id')->references('id')->on('pesertas')->onDelete('cascade');
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
        Schema::dropIfExists('hasil_akhirs');
    }
}
