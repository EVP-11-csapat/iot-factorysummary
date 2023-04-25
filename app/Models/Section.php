<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'section';
    use HasFactory;
    public $timestamps = false;

    public function fact()
    {
        return $this->belongsTo(Fact::class);
    }

    public function machines()
    {
        return $this->hasMany(Machine::class);
    }
}