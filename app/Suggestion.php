<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $table = 'suggestions';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps

    //Creating 1-* reationship with Users. Each suggestion belongs to only 1 user.
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Creating 1-* reationship with Brand. Each suggestion belongs to only 1 brand.
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
