<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\userwh as Authenticatable;

class userwh extends Model
{

    protected $table = 'userwh';
    protected $fillable = ['name','password','phoneNo','email','address'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}