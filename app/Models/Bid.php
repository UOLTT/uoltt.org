<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{

    protected $fillable = [
        'commodity_id',
        'shop_id',
        'reported_by',
        'price',
        'quantity'
    ];

    protected $table = 'bids';

    public $timestamps = true;

    public function reporter() {
        return $this->belongsTo(User::class,'id','reported_by');
    }

}
