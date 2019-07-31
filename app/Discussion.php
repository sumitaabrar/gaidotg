<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $table = 'discussions';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps

    //Creating 1-* reationship with Users. Each discussion belongs to only 1 user.
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Creating 1-* reationship with DComment. There can be multiple discussion-comments for each Discussion.
    public function dcomments()
    {
        return $this->hasMany('App\DComment', 'discussion_id');
    }

    //Creating 1-* reationship with DUseful. There can be multiple discussion-usefuls for each Discussion.
    public function dusefuls()
    {
        return $this->hasMany('App\DUseful', 'discussion_id');
    }
}
