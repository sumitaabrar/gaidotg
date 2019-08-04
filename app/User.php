<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //Creating 1-* reationship with Reccomendation. Each user can have multiple recommendations.
    public function recommendation()
    {
        return $this->hasMany('App\Recommendation');
    }

    //Creating 1-* reationship with Discussion. Each user can have multiple discussions.
    public function discussion()
    {
        return $this->hasMany('App\Discussion');
    }

    //Creating 1-* reationship with Review. Each user can have multiple reviews.
    public function review()
    {
        return $this->hasMany('App\Review');
    }
    
    //Creating 1-* reationship with Rating. Each user can have multiple ratings.
    public function rating()
    {
        return $this->hasMany('App\Rating');
    }


    //Creating 1-* reationship with DComment. Each user can have multiple discussion-comments.
    public function dcomment()
    {
        return $this->hasMany('App\DComment');
    }

     //Creating 1-* reationship with Testimonial. Each user can have only one Testimonial.
     public function testimonial()
     {
         return $this->hasOne('App\Testimonial');
     }

}
