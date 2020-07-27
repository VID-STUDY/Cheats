<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name', 'description', 'sort_order'
    ];

    public function cheats()
    {
        return $this->hasMany(Cheat::class);
    }
}
