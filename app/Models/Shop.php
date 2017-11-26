<?php

namespace App\Models;

use App\Models\Abstractions\ModeratableModel;

class Shop extends ModeratableModel
{

    protected $fillable = [
        'location_id',
        'allegiance_id',
        'affiliation_id',
        'name'
    ];

    protected $table = 'shops';

    public $timestamps = false;

    public function affiliation() {
        return $this->belongsTo(Affiliation::class);
    }

    public function allegiance() {
        return $this->belongsTo(Allegiance::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function bids() {
        return $this->hasMany(Bid::class);
    }

}
