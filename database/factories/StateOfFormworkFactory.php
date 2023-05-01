<?php

namespace Database\Factories;

use App\Models\ProductionMachine;
use DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StateOfFormwork>
 */
class StateOfFormworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'productionMachineID' => ProductionMachine::whereNotIn('id', DB::table('state_of_formwork')->pluck('productionMachineID')->toArray())->pluck('id')->random(),
            'isOpen' => $this->faker->boolean(),
            'dateOfState' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ];
    }
}