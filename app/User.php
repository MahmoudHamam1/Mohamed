<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'verified',
        'email',
        'first_name',
        'last_name',
        'birthdate',
        'phone_number',
        'nationality',
        'id_number',
        'country',
        'district',
        'gender',
        'avatar',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fullName(){
        return $this->first_name. " " . $this->last_name;
    }

    public function getAvatarAttribute($value){

        return  ( isset($value) && $value != '' ) ? asset('storage/'. $value) : null;
    }

    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->toDateString();
    }

    public function getUpdatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->toDateString();
    }

    public function company() {

        return $this->hasOne('App\Company');
    }
}
