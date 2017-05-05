<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{

    protected $fillable = [
        'name',
        'description',
        'mass'
    ];

    protected $table = 'commodities';

    public $timestamps = false;

}
