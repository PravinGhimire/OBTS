<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    // Specify the table name if it is not the plural form of the model name
    protected $table = 'destinations'; // or 'destinations', depending on your actual table name
    protected $primaryKey = 'destination_id';

    protected $fillable = ['destination_name', 'destination_code', 'Source_id'];
    public function schedules()
    {
        return $this->hasMany(BusSchedule::class, 'destination_id');
    }
}
