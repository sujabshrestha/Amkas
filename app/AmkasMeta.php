<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmkasMeta extends Model
{
    protected $fillable =
    [
        'amkas_form_id','key','value'
    ];


    public function amkasform(){
        return $this->belongsTo(AmkasForm::class,'id','amkas_form_id');
    }


}
