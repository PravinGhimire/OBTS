<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $primaryKey = 'operator_id';

    public function buses()
    {
        return $this->hasMany(Bus::class, 'operator_id');
    }
    

    public function schedules()
    {
        return $this->hasMany(BusSchedule::class,);
    }
}
