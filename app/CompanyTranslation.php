<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Validator;

class CompanyTranslation extends Model
{
    public $timestamps = false;
    public $fillable = ['name','employee_name','description','address'];

}
