<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModerationRequest extends Model
{
    protected $fillable = [
        'active',
        'opener_id',
        'opener_comments',
        'moderator_comments'
    ];
    protected $table = 'moderation_requests';

    public function moderatable() {
        return $this->morphTo();
    }
}
