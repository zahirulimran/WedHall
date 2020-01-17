<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotion_wh extends Model
{
    protected $table = 'promotion_wh';
    protected $primaryKey = 'id';
    protected $fillable = ['whID','promotionID'];

}