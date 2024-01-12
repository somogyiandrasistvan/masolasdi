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
        Schema::create('beadas', function (Blueprint $table) {
            $table->id('orvos_id');
            $table->id('gyerek_id');
            $table->date('idopont');
            $table->date('beadas_datuma');
            $table->string('megjegyzes');
            $table->date('tervezett_ido');
            $table->id('oltas_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beadas');
    }
};
