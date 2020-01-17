<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilities_wh extends Model
{
    protected $table = 'facilities_wh';
    protected $primaryKey = 'id';
    protected $fillable = ['whID','facilitiesID'];
     
}