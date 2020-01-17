<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilities extends Model
{
    protected $table = 'facilities';
    protected $fillable = ['fac','type'];

    public function wedd()
    {
        return $this->belongsToMany('App\wh','facilities_wh','facilitiesID','whID');
    }
}