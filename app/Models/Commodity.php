<?php

namespace App\Models;

use App\Models\Abstractions\ModeratableModel;

class Commodity extends ModeratableModel
{

    protected $fillable = [
        'name',
        'description',
        'mass'
    ];

    protected $table = 'commodities';

    public $timestamps = false;

    public function bids() {
        return $this->hasMany(Bid::class);
    }

}
