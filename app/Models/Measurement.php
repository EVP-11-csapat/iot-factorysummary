<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $table = 'measurement';
    use HasFactory;
    public $timestamps = false;

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}