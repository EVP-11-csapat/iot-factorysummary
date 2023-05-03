<?php

namespace Database\Factories;

use App\Models\Machine;
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
            'machineID' =>  Machine::all()->random()->id,
            'isOpen' => $this->faker->boolean(),
            'dateOfState' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ];
    }

    public function withMachineID($machineID) : StateOfFormworkFactory
    {
        return $this->state([
            'machineID' => $machineID
        ]);
    }

    public function withDate($date) : StateOfFormworkFactory
    {
        return $this->state([
            'dateOfState' => $date
        ]);
    }
}