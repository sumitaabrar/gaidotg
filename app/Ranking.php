<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table = 'rankings';  //Table Name
    public $primaryKey = 'id';  //Primary Key
    public $timestamps = true;  //Timestamps

    //Creating 1-* reationship with Brands. Each review is about 1 brand only
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
