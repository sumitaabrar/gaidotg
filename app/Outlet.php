<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlets';
    public $primaryKey = 'id';
    public $timestamps = true;

    //Creating 1-* relatioships with Brand. Each outlet belogns to only 1 brand
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
