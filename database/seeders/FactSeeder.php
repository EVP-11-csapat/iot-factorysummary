<?php

namespace Database\Seeders;

use App\Models\Absorbent;
use App\Models\Compressor;
use App\Models\Fact;
use App\Models\ProductionMachine;
use App\Models\Section;
use App\Models\StateOfFormwork;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fact::factory()->create();
        Section::factory()->count(5)->create();
        Compressor::factory()->count(5)->create();
        Absorbent::factory()->count(5)->create();
        ProductionMachine::factory()->count(5)->create();
    }
}