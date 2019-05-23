<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Engine extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'engine';
    
    protected $fillable = [
        'car_id', 'power','price'
    ];
}