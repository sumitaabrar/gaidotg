<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    public $primaryKey = 'id';
    public $timestamps = true;

    //Creating 1-* relatioship with Subcategorys. Each type belongs to a single subcategory.
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    //Creating 1-* reationship with Brand. Each type can have multiple brands.
    public function brand()
    {
        return $this->hasMany('App\Brand');
    }
}
