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
        Schema::create('orvos', function (Blueprint $table) {
            $table->id('orvos_id');
            $table->id('felhasznalo_id');
            $table->string('vez_nev');
            $table->string('ker_nev');
            $table->id('rendelo_id');
            $table->integer('tel_szam');
            $table->string('publikus_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orvos');
    }
};
