<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmkasForm extends Model
{
    protected $fillable = [
        'sheltercase_no','date_of_dep','date_of_arr','date_of_reg','name','dob','passportno',
        'originaladdress','contact_no','Education','foreignemployment','transitcountry',
        'durationofstay','age','document','parentialname','maritialstatus','no_of_children','natureofjobs'
    ];
}
