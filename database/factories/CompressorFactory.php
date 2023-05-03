<?php

namespace Database\Factories;

use App\Models\Machine;
use DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compressor>
 */
class CompressorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'machineID' => DB::table('machine')->whereNotIn(
            //     'id',
            //     array_unique(
            //         array_merge(
            //             DB::table('absorbent')->pluck('machineID')->toArray(),
            //             DB::table('compressor')->pluck('machineID')->toArray(),
            //             DB::table('production_machine')->pluck('machineID')->toArray()
            //         )
            //     )
            // )->pluck('id')->random(),
            'machineID' => Machine::factory()->create()->id,
        ];
    }
}