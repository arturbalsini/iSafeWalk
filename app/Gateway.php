<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gateway extends Model
{
    use SoftDeletes;

    protected $table = 'gateways';

    protected $fillable = [
        'name',
        'serial',
        'zone_id',
        'zone_x',
        'zone_y',
    ];

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }
}
