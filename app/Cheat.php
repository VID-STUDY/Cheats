<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheat extends Model
{
    protected $fillable = [
        'name', 'type', 'release_date', 'manufacturer', 'sort_order', 'game_id'
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
        return $this->hasMany(SubscribtionDuration::class);
    }
}
