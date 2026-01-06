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
        Schema::create('movies', function (Blueprint $table) {
             $table->id('idMovie');
            $table->foreignId('Director_idDirector')
                ->constrained('directors', 'idDirector')
                ->cascadeOnDelete();

            $table->foreignId('Studio_idStudio')
                ->constrained('studios', 'idStudio')
                ->cascadeOnDelete();

            $table->string('name_movie', 40);
            $table->string('country_of_release', 20);
            $table->string('language', 15);
            $table->string('filming_location', 30);
            $table->integer('year_of_release');
            $table->string('category', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
