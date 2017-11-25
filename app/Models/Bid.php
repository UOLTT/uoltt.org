<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'commodity_id',
        'shop_id',
        'reported_by',
        'price',
        'quantity',
        'requires_moderation'
    ];

    protected $table = 'bids';

    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('moderated', function(Builder $query) {
            return $query->where('requires_moderation', false);
        });
    }

    public function scopeRequiresModeration(Builder $query) {
        return $query->withoutGlobalScope('moderated')
            ->where('requires_moderation', true);
    }

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
