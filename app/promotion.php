<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $table = 'promotion';
    protected $fillable = ['promotion','type'];
    
    public function wedd()
    {
        return $this->belongsToMany('App\wh','promotion_wh','promotionID','whID');
    }
}
