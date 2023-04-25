<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionMachine extends Model
{
    protected $table = 'production_machine';
    use HasFactory;
    public $timestamps = false;

    public function machine()
    {
        return $this->hasOne(Machine::class);
    }

    public function state_of_formwork()
    {
        return $this->hasOne(StateOfFormwork::class);
    }
}