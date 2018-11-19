<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SiteConfig extends Model
{
    //
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['about','location'];
    protected $table='site_configs';
       protected $fillable=['logo','phone_number','about','location','loadingimage','email','facebook','google','twitter','insta','snapchat','youtube','android','ios','longitude','latitude'];
}
