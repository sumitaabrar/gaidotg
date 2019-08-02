<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RUseful extends Model
{
    protected $table = 'r_usefuls';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps

    //Creating 1-* reationship with Users. Each useful belongs to only 1 user.
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Creating 1-* reationship with Recommendation. Each useful belongs to only 1 recommendation.
    public function recommendation()
    {
        return $this->belongsTo('App\Recommendation');
    }
}
