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
        Schema::create('vote', function (Blueprint $table) {
            $table->increments("idvote");
            $table->date("date",50);
            $table->unsignedInteger('id_election');
            $table->unsignedInteger('idbulletin');
            $table->unsignedInteger('id_participant');
            $table->foreign(('id_election'))->references('id_election')->on('election')->onDelete('cascade');
            $table->foreign(('idbulletin'))->references('idbulletin')->on('bulletin')->onDelete('cascade');
            $table->foreign(('id_participant'))->references('id_participant')->on('participant')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
