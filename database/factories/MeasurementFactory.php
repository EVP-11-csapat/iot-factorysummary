<?php

namespace Database\Factories;

use App\Models\Machine;
use App\Models\Measurement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Measurement>
 */
class MeasurementFactory extends Factory
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
            'measuredValue' => $this->faker->randomFloat(2, 0, 100),
            'dateOfMeasurement' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'unitOfMeasurement' => $this->faker->randomElement(['Kwh', 'm3', 'piece'])
        ];
    }

    public function withMachineID($machineID) : MeasurementFactory
    {
        return $this->state([
            'machineID' => $machineID
        ]);
    }

    public function withDate($date) : MeasurementFactory
    {
        return $this->state([
            'dateOfMeasurement' => $date
        ]);
    }

    public function withUnit($unit) : MeasurementFactory
    {
        return $this->state([
            'unitOfMeasurement' => $unit
        ]);
    }

}