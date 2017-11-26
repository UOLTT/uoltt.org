<?php

namespace App\Models;

use App\Models\Abstractions\ModeratableModel;

class Location extends ModeratableModel
{

    protected $fillable = [
        'name',
        'system_id',
        'user_id',
        'celestial_type_id',
        'allegiance_id',
        'affiliation_id'
    ];

    protected $table = 'locations';

    public $timestamps = false;

    public function affiliation() {
        return $this->belongsTo(Affiliation::class);
    }

    public function allegiance() {
        return $this->belongsTo(Allegiance::class);
    }

    public function celestial_type() {
        return $this->belongsTo(CelestialType::class,'celestial_type_id','id');
    }

    public function shops() {
        return $this->hasMany(Shop::class);
    }

    public function surveyor() {
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function system() {
        return $this->belongsTo(System::class);
    }

}
