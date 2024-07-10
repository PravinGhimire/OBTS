<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    use HasFactory;

    protected $primaryKey = 'schedule_id';
    
    protected $fillable = [
        'bus_id',
        'operator_id',
        'source_id',
        'destination_id',
        'depart_date',
        'return_date',
        'depart_time',
        'return_time',
        'pickup_address',
        'dropoff_address',
        'status',
    ];
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
