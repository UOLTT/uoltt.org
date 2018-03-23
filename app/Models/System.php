<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = ['name'];

    protected $table = 'systems';

    public $timestamps = true;

    public function allegiance()
    {
        return $this->belongsTo(Allegiance::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function surveyor()
    {
        return $this->belongsTo(User::class);
    }
}
