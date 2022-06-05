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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->string('ttl');
            $table->string('nisn');
            $table->string('nik');
            $table->string('alamat');
            $table->string('ayah');
            $table->string('kerja_ayah');
            $table->string('ibu');
            $table->string('kerja_ibu');
            $table->string('no_hp');
            $table->string('asal_sekolah');
            $table->integer('thn_lulus');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('students');
    }
};
