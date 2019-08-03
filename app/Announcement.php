<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcements';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps

    //Creating 1-* reationship with Brands. Each announcement belongs to only 1 brand.
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

}
