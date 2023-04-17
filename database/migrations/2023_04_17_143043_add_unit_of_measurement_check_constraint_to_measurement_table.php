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
        Schema::table('measurement', function (Blueprint $table) {
            $table->string('unitOfMeasurement', 10)->change();
        });

        DB::statement('ALTER TABLE measurement ADD CONSTRAINT chk_unitOfMeasurement CHECK (unitOfMeasurement IN ("Kwh", "m3", "piece"))');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('measurement', function (Blueprint $table) {
            DB::statement('ALTER TABLE measurement DROP CONSTRAINT chk_unitOfMeasurement');

            Schema::table('measurement', function (Blueprint $table) {
                $table->string('unitOfMeasurement', 10)->change();
            });
        });
    }
};