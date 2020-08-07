<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionDuration extends Model
{
    protected $fillable = [
        'duration', 'price'
    ];

    /**
     * Duration's cheat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cheat()
    {
        return $this->belongsTo(Cheat::class);
    }
}
