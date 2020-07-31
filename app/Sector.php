<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use SoftDeletes;

    protected $table = 'sectors';

    protected $fillable = [
        'name',
        'x_length',
        'y_width',
        'z_height',
        'zone_id',
        'initial_x',
        'initial_y',
    ];

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }
}
