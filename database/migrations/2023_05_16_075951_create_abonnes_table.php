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
        Schema::create('abonne', function (Blueprint $table) {
            $table->increments('id_abonne');
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->integer('age');
            $table->char('sexe', 1)->default('F');
            // $table->string('professsion', 100);
            $table->string('rue', 50);
            $table->string('codePostal', 50);
            $table->string('ville', 50);
            $table->string('pays', 50);
            $table->string('tel', 20)->nullable();
            $table->string('email', 300)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnes');
    }
};
