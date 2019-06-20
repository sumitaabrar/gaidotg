<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps


    //Creating 1-1 reationship with BrandUser. Each brand can only have 1 BrandUser account
    public function brandUser()
    {
        return $this->hasOne('App\BrandUser');
    }
}