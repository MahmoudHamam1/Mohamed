<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;
class sliderTranslation extends Model
{
    //
    public $timestamps = false;

    protected $fillable = ['title','description'];
}
