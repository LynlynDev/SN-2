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
        Schema::create('motivation', function (Blueprint $table) {
            $table->increments('id_motivation');
            $table->string('intitule', 100);
            $table->unsignedInteger('id_abonne');
            $table->foreign('id_abonne')->references('id_abonne')->on('abonne')->onDelete('cascade')->name('motivations_id_abonne_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motivations');
    }
};
