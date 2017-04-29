<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CelestialType extends Model
{

    protected $fillable = ['name'];

    protected $table = 'celestial_types';

    public $timestamps = false;

}
