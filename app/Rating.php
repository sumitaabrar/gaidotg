<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';  //Table Name
    public $primaryKey = 'id';  //Primary Key
    public $timestamps = true;  //Timestamps

    //Creating 1-* reationship with Users. Each review belongs to only 1 user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Creating 1-* reationship with Brands. Each review is about 1 brand only
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
