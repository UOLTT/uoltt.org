<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
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

}
