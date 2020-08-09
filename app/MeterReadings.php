<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeterReadings extends Model
{
    protected $fillable = ['name', 'cardnumber', 'currentmeterreadings'];

    public function  user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}