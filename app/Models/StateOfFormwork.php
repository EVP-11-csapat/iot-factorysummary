<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateOfFormwork extends Model
{
    protected $table = 'state_of_formwork';
    use HasFactory;
    public $timestamps = false;

    public function production_machine()
    {
        return $this->belongsTo(ProductionMachine::class);
    }
}