<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheat extends Model
{
    protected $fillable = [
        'name', 'price', 'game_id', 'sort_order'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function features()
    {
        return $this->hasMany(CheatFeature::class);
    }
}
