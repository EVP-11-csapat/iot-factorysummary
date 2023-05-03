<?php

namespace Database\Factories;

use App\Models\Absorbent;
use App\Models\Machine;
use App\Models\Measurement;
use App\Models\StateOfFormwork;
use DB;
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
        $id = Machine::factory()->create()->id;

        $startDate = today()->subDays(7);
        $endDate = today();

        for ($date = $startDate; $date <= $endDate; $date->addDay()) {
            Measurement::factory()->withMachineID($id)->withUnit('kWh')->withDate($date->format('Y-m-d'))->create();
            Measurement::factory()->withMachineID($id)->withUnit('pieces')->withDate($date->format('Y-m-d'))->create();
            StateOfFormwork::factory()->withMachineID($id)->withDate($date->format('Y-m-d'))->create();
        }

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
            'machineID' => $id,
            'absorbentID' => Absorbent::all()->random()->id,
        ];
    }
}