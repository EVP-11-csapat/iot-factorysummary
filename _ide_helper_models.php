<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Absorbent
 *
 * @property int $id
 * @property int $machineID
 * @property-read \App\Models\Machine|null $machine
 * @method static \Database\Factories\AbsorbentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Absorbent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Absorbent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Absorbent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Absorbent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absorbent whereMachineID($value)
 */
	class Absorbent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Compressor
 *
 * @property int $id
 * @property int $machineID
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Machine> $machine
 * @property-read int|null $machine_count
 * @method static \Database\Factories\CompressorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Compressor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compressor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compressor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Compressor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compressor whereMachineID($value)
 */
	class Compressor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fact
 *
 * @property int $id
 * @property float $waterConsumtion
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Section> $sections
 * @property-read int|null $sections_count
 * @method static \Database\Factories\FactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Fact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fact whereWaterConsumtion($value)
 */
	class Fact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Machine
 *
 * @property int $id
 * @property int $sectionID
 * @property-read \App\Models\Absorbent|null $absorbent
 * @property-read \App\Models\Compressor|null $compressor
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Measurement> $measurement
 * @property-read int|null $measurement_count
 * @property-read \App\Models\ProductionMachine|null $production_machine
 * @property-read \App\Models\Section|null $section
 * @method static \Database\Factories\MachineFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Machine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Machine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Machine query()
 * @method static \Illuminate\Database\Eloquent\Builder|Machine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Machine whereSectionID($value)
 */
	class Machine extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Measurement
 *
 * @property int $id
 * @property int $machineID
 * @property float $measuredValue
 * @property string $unitOfMeasurement
 * @property string $dateOfMeasurement
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Machine|null $machine
 * @method static \Database\Factories\MeasurementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement whereDateOfMeasurement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement whereMachineID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement whereMeasuredValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement whereUnitOfMeasurement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measurement whereUpdatedAt($value)
 */
	class Measurement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductionMachine
 *
 * @property int $id
 * @property int $machineID
 * @property int $absorbentID
 * @property-read \App\Models\Machine|null $machine
 * @property-read \App\Models\StateOfFormwork|null $state_of_formwork
 * @method static \Database\Factories\ProductionMachineFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionMachine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionMachine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionMachine query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionMachine whereAbsorbentID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionMachine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionMachine whereMachineID($value)
 */
	class ProductionMachine extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Section
 *
 * @property int $id
 * @property int $factoryID
 * @property-read \App\Models\Fact|null $fact
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Machine> $machines
 * @property-read int|null $machines_count
 * @method static \Database\Factories\SectionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereFactoryID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereId($value)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StateOfFormwork
 *
 * @property int $id
 * @property int $machineID
 * @property int $isOpen
 * @property string $dateOfState
 * @property-read \App\Models\ProductionMachine|null $production_machine
 * @method static \Database\Factories\StateOfFormworkFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|StateOfFormwork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateOfFormwork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateOfFormwork query()
 * @method static \Illuminate\Database\Eloquent\Builder|StateOfFormwork whereDateOfState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateOfFormwork whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateOfFormwork whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateOfFormwork whereMachineID($value)
 */
	class StateOfFormwork extends \Eloquent {}
}

