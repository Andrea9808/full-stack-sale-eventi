<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    //Mentre una entità Evento dovrà avere almeno le seguenti caratteristiche:

    //- id
    //- titolo
    //- descrizione
    //- data inizio
    //- data fine
    //- immagine

    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->text('descrizione')->nullable();
            $table->dateTime('data_inizio');
            $table->dateTime('data_fine');
            $table->string('immagine')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
