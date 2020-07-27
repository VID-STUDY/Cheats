<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheatFeature extends Model
{
    protected $fillable = [
        'name', 'icon', 'sort_order', 'cheat_id'
    ];

    public function cheat()
    {
        return $this->belongsTo(Cheat::class);
    }
}
