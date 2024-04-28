<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Azienda
     * Stazione di partenza
     * Stazione di arrivo
     * Orario di partenza
     * Orario di arrivo
     * Codice Treno
     * Numero Carrozze
     * In orario
     * Cancellato
     * 
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('start_station', 100);
            $table->string('end_station', 100);
            $table->time('start_time');
            $table->time('end_time');
            $table->string('code', 50)->nullable();
            $table->unsignedTinyInteger('carriages_number')->nullable();
            $table->boolean('ontime');
            $table->boolean('canceled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
