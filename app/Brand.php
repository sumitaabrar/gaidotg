<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps


    //Creating 1-1 reationship with BrandUser. Each brand can have only 1 BrandUser account
    public function brandUser()
    {
        return $this->hasOne('App\BrandUser');
    }

    //Creating 1-* reationship with Review. There can be multiple reviews for each Brand.
    public function review()
    {
        return $this->hasMany('App\Review');
    }

    //Creating 1-* reationship with Category. Each brand belongs to a signle category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //Creating 1-* reationship with Subcategory. Each brand belongs to a signle subcategory
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    //Creating 1-* reationship with Type. Each brand belongs to a signle type
    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    //Creating 1-* reationship with Assesment. There can be multiple assessments for each Brand.
    public function assessment()
    {
        return $this->hasMany('App\Assessment');
    }

    //Creating 1-* reationship with Outlet. There can be multiple outlets of each Brand.
    public function outlet()
    {
        return $this->hasMany('App\Outlet');
    }
}