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
        Schema::create('szulos', function (Blueprint $table) {
            $table->id('szulo_id');
            $table->id('felhasznalo_id');
            $table->string('ker_nev');
            $table->string('ker_nev');
            $table->string('lakcim_varos');
            $table->integer('lakcim_irSzam');
            $table->string('lakcim_utca');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szulos');
    }
};
