<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beacon extends Model
{
    use SoftDeletes;

    protected $table = 'beacons';

    protected $fillable = [
        'name',
        'serial',
    ];

    public function people()
    {
        return $this->hasOne(People::class, 'beacon_id', 'id');
    }
}
