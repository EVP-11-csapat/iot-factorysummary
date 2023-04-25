<?php

namespace Database\Factories;

use App\Models\Absorbent;
use App\Models\Machine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductionMachine>
 */
class ProductionMachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'machineID' => Machine::all()->random()->id,
            'absorbentID' => Absorbent::all()->random()->id,
        ];
    }
}