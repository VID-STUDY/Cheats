<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'username', 'hwidid', 'serialnum', 'serialtime', 'serialstatus', 'cheat_id'
    ];

    /**
     * Owner of subscription
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'email');
    }

    /**
     * Cheat of subscription
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cheat()
    {
        return $this->belongsTo(Cheat::class);
    }

    public function validUntil()
    {
        $createdAt = $this->created_at;
        return $createdAt->addHours($this->serialtime);
    }

    public function remainingTime()
    {
        return now()->diffInHours($this->validUntil());
    }
}
