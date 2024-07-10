<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{   use HasFactory;
    protected $guarded=[];
    protected $primaryKey = 'bus_id';

    public function schedules()
{
    return $this->hasMany(BusSchedule::class, 'bus_id');
}

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }
}
