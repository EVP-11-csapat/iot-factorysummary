<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('measurement', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('machineID')->references('id')->on('machine');
            $table->float('measuredValue');
            $table->string('unitOfMeasurement', 10);
            $table->date('dateOfMeasurement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurement');
    }
};