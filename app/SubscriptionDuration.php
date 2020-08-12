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

    public function getPeriod()
    {
        $duration = $this->duration;
        if ($duration < 24) {
            $postfix = "часов";
            if ($duration == 1)
                $postfix = "час";
            else if ($duration >= 2 and $duration <= 4)
                $postfix = "часа";
            return "$duration $postfix";
        }
        else if ($duration >= 720) {
            $postfix = "месяцев";
            $months = $duration / 720;
            if ($months == 1)
                $postfix = "месяц";
            else if ($months >= 2 and $months <= 4)
                $postfix = "месяца";
            return "$months $postfix";
        } else {
            $postfix = "дней";
            $days = $duration / 24;
            if ($days == 1)
                $postfix = "день";
            else if ($days >= 2 and $days <= 4)
                $postfix = "дня";
            return "$days $postfix";
        }
    }
}
