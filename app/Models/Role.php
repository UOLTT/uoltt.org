<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {

    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];

    public static function findByName($name) {
        return Role::where('name',$name)->first();
    }

}