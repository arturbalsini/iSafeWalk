<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use SoftDeletes;

    protected $table = 'zones';

    protected $fillable = [
        'name',
        'x_length',
        'y_width',
        'z_height',
    ];

    public function sectors()
    {
        return $this->hasMany('App\Sector');
    }
}
