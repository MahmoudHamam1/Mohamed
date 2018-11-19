<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;
class SiteConfigTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['about','location'];
}
