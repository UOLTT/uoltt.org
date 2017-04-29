<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{

    protected $fillable = ['name'];

    protected $table = 'affiliations';

    public $timestamps = false;

}
