<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Cheat extends Model
{
    use HasSlug;

    protected $fillable = [
        'name', 'type', 'description', 'release_date', 'manufacturer',
        'functional', 'system_requirements', 'additional_info',
        'color', 'status', 'payment_link',
        'sort_order', 'game_id'
    ];

    /**
     * Cheat's game
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    /**
     * Cheat's features
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function features()
    {
        return $this->hasMany(CheatFeature::class);
    }

    /**
     * Cheat's subscription duration
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function durations()
    {
        return $this->hasMany(SubscriptionDuration::class);
    }

    public function images()
    {
        return $this->hasMany(CheatImage::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
