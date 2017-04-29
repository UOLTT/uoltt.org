<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CelestialType extends Model
{

    protected $fillable = ['name'];

    protected $table = 'celestial_types';

    public $timestamps = false;

    public function locations() {
        return $this->hasMany(Location::class,'celestial_type_id','id');
    }

}
