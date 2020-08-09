<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Game extends Model
{
    use HasSlug;

    protected $fillable = [
        'name', 'description', 'sort_order', 'short_description'
    ];

    /**
     * Game's cheats
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cheats()
    {
        return $this->hasMany(Cheat::class);
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
