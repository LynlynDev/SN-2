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
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('id_participant');
            $table->string('nom', 100);
            $table->string('login', 10);
            $table->string('cni', 15);
            $table->integer('age');
            $table->char('sexe', 1)->default('F');
            $table->string('statut')->default('E');
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('region_models')->onDelete('cascade');
            $table->string('pwd', 100);
            $table->string('email', 300)->nullable();
            $table->boolean('etat', 1)->default('1');
            $table->string('tel', 20)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant');
    }
};
