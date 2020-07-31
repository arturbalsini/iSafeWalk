<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use SoftDeletes;

    protected $table = 'people';

    protected $dates = [
        'birth_date',
    ];

    protected $fillable = [
        'name',
        'email',
        'status',
        'birth_date',
        'job_title',
        'beacon_id',
    ];

    const STATUS_SELECT = [
        '0' => 'Not defined',
        '1' => 'Not Infected',
        '2' => 'Infected',
        '3' => 'Suspicious',
    ];

    public function beacon()
    {
        return $this->belongsTo(Beacon::class, 'beacon_id');
    }
}
