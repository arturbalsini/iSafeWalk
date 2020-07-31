<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeaconsInteractions extends Model
{
    use SoftDeletes;

    protected $table = 'beacons_interactions';

    protected $fillable = [
        'primary_beacon_id',
        'secondary_beacon_id',
        'duration',
        'distance',
        'interaction_time'
    ];
}
