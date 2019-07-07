<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys'; 
    public $primaryKey = 'id';
    public $timestamps = true;

    //Creating 1-* reationship with Subcategorys. Each category can have multiple subcategorys.
    public function subcategory()
    {
        return $this->hasMany('App\Subcategory');
    }

}
