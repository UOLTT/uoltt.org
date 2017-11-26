<?php

namespace App\Models;

use App\Models\Abstractions\ModeratableModel;

class Bid extends ModeratableModel
{

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'commodity_id',
        'shop_id',
        'reported_by',
        'price',
        'quantity'
    ];

    protected $table = 'bids';

    public $timestamps = true;

    public function commodity() {
        return $this->belongsTo(Commodity::class);
    }

    public function reporter() {
        return $this->belongsTo(User::class,'reported_by','id');
    }

    public function shop() {
        return $this->belongsTo(Shop::class);
    }

}
