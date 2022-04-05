<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class loyaltyCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'reward',
        'progressMethod',
        'logoPosition',
        'logoShape',
        'stampsRequired',
        'stampSlots',
        'backgroundColour',
        'fontColour',
        'status',
        'slotOne',
        'slotTwo',
        'slotThree',
        'slotFour',
        'slotFive',
        'slotSix',
        'slotSeven',
        'slotEight',
        'slotNine',
        'slotTen'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
