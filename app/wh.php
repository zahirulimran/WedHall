<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\facilities;

class wh extends Model
{
    protected $table = 'weddinghall';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phoneNo','address','price','capacity','image','userID'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function booking()
    {
        return $this->belongsTo(booking::class);
    }

    public function faci()
    {
        return $this->belongsToMany('App\facilities','facilities_wh','whID','facilitiesID');
    }

    public function pro()
    {
        return $this->belongsToMany('App\promotion','promotion_wh','whID','promotionID');
    }

    public function ser()
    {
        return $this->belongsToMany('App\services','services_wh','whID','servicesID');
    }
}
