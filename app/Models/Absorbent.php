<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absorbent extends Model
{
    protected $table = 'absorbent';
    use HasFactory;
    public $timestamps = false;

    public function machine()
    {
        return $this->hasOne(Machine::class);
    }
}