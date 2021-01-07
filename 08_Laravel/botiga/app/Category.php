<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public function products(){
        return $this->hasMany('App\Product');
    }

    public static $rules = array(
        'name' => 'required',
        'description' => 'required'
    );
}
