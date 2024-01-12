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
        Schema::create('oltas', function (Blueprint $table) {
            $table->id('oltas_id');
            $table->id('tipus_id');
            $table->id('forgalmazo_id');
            $table->string('szuksegessege');
            $table->string('mellek_hatasa');
            $table->string('adagolas');
            $table->integer('korosztaly');
            $table->boolean('receptre');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oltas');
    }
};
