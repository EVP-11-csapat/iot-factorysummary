<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Fact::factory()->create();
        \App\Models\Section::factory()->count(5)->create();
        \App\Models\Compressor::factory()->count(5)->create();
        \App\Models\Absorbent::factory()->count(5)->create();
        \App\Models\ProductionMachine::factory()->count(20)->create();
        \App\Models\Measurement::factory()->count(100)->create();
        \App\Models\StateOfFormwork::factory()->count(100)->create();
    }
}