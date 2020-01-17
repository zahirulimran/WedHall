<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services_wh extends Model
{
    protected $table = 'services_wh';
    protected $primaryKey = 'id';
    protected $fillable = ['whID','servicesID'];

    public function wedd()
    {
        return $this->belongsToMany('App\wh','services_wh','servicesID','whID');
    }
}