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
        Schema::table('state_of_formwork', function (Blueprint $table) {
            $table->integer('isOpen')->change();
        });

        DB::statement('ALTER TABLE state_of_formwork ADD CONSTRAINT chk_isOpen CHECK (isOpen IN (0, 1))');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE state_of_formwork DROP CONSTRAINT chk_isOpen');

        Schema::table('state_of_formwork', function (Blueprint $table) {
            $table->integer('isOpen')->change();
        });
    }
};