<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
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
}
