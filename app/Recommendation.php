<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    protected $table = 'recommendations';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps

    //Creating 1-* reationship with Users. Each recommendation belongs to only 1 user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Creating 1-* reationship with RComment. There can be multiple recommendation-comments for each Recommendation.
    public function rcomments()
    {
        return $this->hasMany('App\RComment', 'recommendation_id');
    }

    //Creating 1-* reationship with RUseful. There can be multiple recommendation-usefuls for each Recommendation.
    public function rusefuls()
    {
        return $this->hasMany('App\RUseful', 'recommendation_id');
    }
}
