<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compressor extends Model
{
    protected $table = 'compressor';
    use HasFactory;
    public $timestamps = false;

    public function machine()
    {
        return $this->hasMany(Machine::class);
    }
}