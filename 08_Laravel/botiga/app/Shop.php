<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public static $rules = array(
        'name'=> 'required',
        'adress' => 'required',
        'phone' => 'size:12',
        'email' => 'email:rfc,dns',
    );
}
