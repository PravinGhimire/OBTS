<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $primaryKey = 'source_id';


    public function schedules()
    {
        return $this->hasMany(BusSchedule::class, 'source_id');
    }
}
