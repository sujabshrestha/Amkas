<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    protected $fillable = [
        'key','value'
    ];


    public static function returnValue($key){
        $setting = sitesetting::where('key', $key)->first();

        if($setting){
            return $setting->value;
        }

        return null;

    }
}
