<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('berita_id');
            // $table->unsignedBigInteger('posisi_id');
            $table->json('posisi');
            $table->text('keterangan');
            $table->double('ipk_min')->nullable();
            $table->string('pendidikan_terakhir', 20);
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->tinyInteger('status');
            $table->foreign('berita_id')->references('id')->on('beritas')->onDelete('cascade');
            // $table->foreign('posisi_id')->references('id')->on('posisis')->onDelete('cascade');
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
        Schema::dropIfExists('lowongans');
    }
}
