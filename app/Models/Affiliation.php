<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    protected $fillable = ['name'];

    protected $table = 'affiliations';

    public $timestamps = false;

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
