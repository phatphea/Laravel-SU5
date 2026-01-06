<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->id('idCasts');

            $table->foreignId('Movie_idMovie')
                ->constrained('movies', 'idMovie')
                ->cascadeOnDelete();

            $table->foreignId('Actor_idActor')
                ->constrained('actors', 'idActor')
                ->cascadeOnDelete();

            $table->string('roleType', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casts');
    }
};
