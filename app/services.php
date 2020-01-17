<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $table = 'services';
    protected $fillable = ['services','type','contact'];
    
    public function whs()
    {
        return $this->belongsTo('App\wh');
    }
}
