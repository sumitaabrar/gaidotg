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
}
