<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferTranslation extends Model
{
    public $timestamps = false;
    public $fillable = ['title','description'];
}
