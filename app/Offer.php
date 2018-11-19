<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title','description'];

    protected $fillable = ['discount','start_date','expire_date','company_id'];

    public function company() {

        return $this->belongsTo(Company::class);
    }


    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->toDateString();
    }


    public function getUpdatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->toDateString();
    }

    public static function boot() {
        parent::boot();
        static::deleting(function($offer) {
             $offer->translations()->delete();
        });
    }


}
