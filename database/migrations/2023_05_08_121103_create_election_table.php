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
        Schema::create('election', function (Blueprint $table) {
            $table->increments("id_election");
            $table->date("date",50);
            $table->string("lab",100);
            $table->text("description", 300);
            $table->string("statut")->default('ouvert');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('election');
    }
};
