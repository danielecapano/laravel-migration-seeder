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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 20);
            $table->string('departure_station', 20);
            $table->time('departure_time');
            $table->string('arrival_station', 20);
            $table->time('arrival_time');
            $table->unsignedSmallInteger('train_code');
            $table->unsignedTinyInteger('train_carriages');
            $table->date('date');
            $table->unsignedTinyInteger('in_time')->nullable();
            $table->boolean('deleted')->nullable()->default(false);
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
