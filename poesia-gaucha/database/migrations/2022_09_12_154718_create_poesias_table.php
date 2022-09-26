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
            $table->string('nome');
            $table->string('foto')->nullable();
            $table->string('escola')->nullable();
            $table->string('link_pdf')->nullable();
            $table->string('texto')->nullable();
            $table->string('link_video')->nullable();
            $table->string('link_audio')->nullable();
            $table->integer('ordem_poema')->nullable();

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
