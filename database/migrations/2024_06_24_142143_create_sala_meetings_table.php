<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // Teniamo presente che una entità Sala Meeting dovrà avere almeno le seguenti caratteristiche:

    //- id
    //- nome
    //- descrizione
    //- numero posti disponibili
    public function up(): void
    {
        Schema::create('sala_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descrizione');
            $table->integer('numero_posti_disponibili');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sala_meetings');
    }
};
