<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $table = 'assessments';
    public $primaryKey = 'id';
    public $timestamps = true;

    //Creating 1-* relatioships with Brand. Each assessment belogns to only 1 brand
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
