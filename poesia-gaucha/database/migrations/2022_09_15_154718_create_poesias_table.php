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
        Schema::create('poesias', function (Blueprint $table) {
            $table->id();
            $table->string('autor');
            $table->string('titulo');
            $table->string('foto');
            $table->string('escola');
            $table->string('link_pdf');
            $table->string('texto');
            $table->string('link_video');
            $table->string('link_audio');
            $table->integer('ordem_poema');

            $table->foreignId('editions_id')->references('id')->on('editions');

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
        Schema::dropIfExists('poesias');
    }
};
