<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategorys'; 
    public $primaryKey = 'id';
    public $timestamps = true;

    //Creating 1-* reationship with Category. Each subcategory belongs to 1 category only
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //Creating 1-* relatioship with Types. Each subcategory can have many types
    public function type()
    {
        return $this->hasMany('App\Type');
    }

    //Creating 1-* reationship with Brand. Each subcategory can have multiple brands.
    public function brand()
    {
        return $this->hasMany('App\Brand');
    }
}
