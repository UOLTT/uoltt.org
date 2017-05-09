<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allegiance extends Model
{

    protected $fillable = ['name'];

    protected $table = 'allegiances';

    public $timestamps = false;

    public function locations() {
        return $this->hasMany(Location::class);
    }

    public function shops() {
        return $this->hasMany(Shop::class);
    }

    public function systems() {
        return $this->hasMany(System::class);
    }

}
