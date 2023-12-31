<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_metik', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->unsignedBigInteger("jurusan_id");
            $table->string("kelas");
            $table->char("nisn", 7);
            $table->timestamps();
            $table->foreign('jurusan_id')->references('id')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_metik');
    }
};