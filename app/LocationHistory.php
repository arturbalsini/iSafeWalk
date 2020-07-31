<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationHistory extends Model
{
    use SoftDeletes;

    protected $table = 'location_history';

    protected $fillable = [
        'beacon_id',
        'gateway_id',
        'duration',
        'location_time',
    ];

    public function beacon()
    {
        return $this->belongsTo(Beacon::class, 'beacon_id');
    }

    public function gateway()
    {
        return $this->belongsTo(Gateway::class, 'gateway_id');
    }
}
