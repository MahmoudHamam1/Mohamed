<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Card extends Model
{

    protected $fillable = [
            'name',
            'phone_number',
            'nationality',
            'id_number',
            'country',
            'district',
            'email',
            'birthdate',
            'user_id',
            'card_id',
            'status',
            'deliver_date',
            'expire_date',
        ];



    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->toDateString();
    }


}
