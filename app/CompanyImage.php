<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyImage extends Model
{

    protected $fillable = ['type','image'];


    public function getCompanyLogoAttribute($value){

        return $value == null ? null : asset('storage/'. $value);
    }

    public function getOfferLogoAttribute($value){

        return $value == null ? null : asset('storage/'. $value);
    }

    public function getSlider1Attribute($value){

        return $value == null ? null : asset('storage/'. $value);
    }

    public function getSlider2Attribute($value){

        return $value == null ? null : asset('storage/'. $value);
    }

    public function getSlider3Attribute($value){

        return $value == null ? null : asset('storage/'. $value);
    }

    public function getSlider4Attribute($value){

        return $value == null ? null : asset('storage/'. $value);
    }

    public function getSlider5Attribute($value){

        return $value == null ? null : asset('storage/'. $value);
    }


    public function companies() {

        return $this->belongsTo('App\Company');
    }

}
