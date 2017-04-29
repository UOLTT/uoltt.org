<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allegiance extends Model
{

    protected $fillable = ['name'];

    protected $table = 'allegiances';

    public $timestamps = false;

}
