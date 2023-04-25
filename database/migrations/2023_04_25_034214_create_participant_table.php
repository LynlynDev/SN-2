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
            $table->increments('id');
            $table->string('nom', 50);
            $table->string('login', 30);
            $table->string('cni', 10);
            // $table->integer('age', 10);
            $table->char('sexe', 1)->default('F');
            $table->string('status')->default('E');
            // $table->unsignedInteger('id_region');
            // $table->foreign('id_region')->references('id')->on('regions')->onDelete('cascade');
            $table->string('password', 100);
            $table->string('email', 30)->nullable();
            $table->string('etat', 1)->default('0');
            $table->string('tel', 15)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
