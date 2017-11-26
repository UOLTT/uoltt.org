<?php

namespace App\Models\Abstractions;


use App\Models\ModerationRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ModeratableModel extends Model
{

    /**
     * Boot the model abstraction, add the moderated scope.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('moderated', function(Builder $query) {
            return $query->whereDoesntHave('moderation_requests', function(Builder $query) {
                $query->where('active', false);
            });
        });
    }

    /**
     * Add the scope for models requiring moderation.
     *
     * @param Builder $query
     *
     * @return Builder|static
     */
    public function scopeRequiresModeration(Builder $query) {
        return $query->withoutGlobalScope('moderated')
            ->whereHas('moderation_requests', function(Builder $query) {
                $query->where('active', true);
            });
    }

    /**
     * The relationship between the model and the moderation requests.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function moderation_requests() {
        return $this->morphMany(ModerationRequest::class, 'moderatable');
    }

}