<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BrandUser extends Authenticatable
{
    use Notifiable;

    protected $guard = 'brandUser';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Creating 1-1 reationship with Brand. Each brandUser belongs to Only 1 Brand
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
