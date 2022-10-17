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
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('numero_edicao');
            $table->string('livreto');
            $table->string('informacoes', 6500);
            $table->string('resultados', 3500);

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
        Schema::dropIfExists('editions');
    }
};
