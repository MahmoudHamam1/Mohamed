<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    //
    protected $fillable=['email','message','type','rate'];
}
