<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','description','address'];

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'address',
        'phone_number_1',
        'phone_number_2',
        'website',
        'email',
        'snapchat',
        'twitter',
        'facebook',
        'instgram',
        'longitude',
        'latitude',
    ];


    public function getImageAttribute($value){

        return asset('storage/'. $value);
    }

    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->toDateString();
    }

    public function getUpdatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->toDateString();
    }


    public function images() {

        return $this->hasOne('App\CompanyImage');
    }



    public function offers() {

        return $this->hasMany(Offer::class);
    }

    public function user() {

        return $this->belongsTo('App\User');
    }

    public static function boot() {
        parent::boot();
        static::deleting(function($company) {
             $company->translations()->delete();
        });
    }

}
