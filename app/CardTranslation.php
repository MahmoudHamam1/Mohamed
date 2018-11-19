<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class CardTranslation extends Model
{

    public $timestamps = false;

    protected $fillable = ['name','title','description'];

}
