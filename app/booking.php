<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = ['adate','ddate','atime','dtime','status','userID','whID'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function weddinghall()
    {
        return $this->hasMany(wh::class,'whID');
    }
   
}
