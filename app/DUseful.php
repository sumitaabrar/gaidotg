<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DUseful extends Model
{
    protected $table = 'd_usefuls';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps

    //Creating 1-* reationship with Users. Each useful belongs to only 1 user.
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Creating 1-* reationship with Discussions. Each useful belongs to only 1 discussion.
    public function discussion()
    {
        return $this->belongsTo('App\Discussion');
    }
}
