<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';  //Table Name
    public $primaryKey = 'id';   //Primary Key
    public $timestamps = true;   //Timestamps

    //Creating 1-* reationship with Users. Each testimonial belongs to only 1 user.
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
