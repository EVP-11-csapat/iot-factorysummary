<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $table = 'machine';
    use HasFactory;
    public $timestamps = false;

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function compressor()
    {
        return $this->belongsTo(Compressor::class);
    }

    public function measurement()
    {
        return $this->hasMany(Measurement::class);
    }

    public function absorbent()
    {
        return $this->belongsTo(Absorbent::class);
    }

    public function production_machine()
    {
        return $this->belongsTo(ProductionMachine::class);
    }
}